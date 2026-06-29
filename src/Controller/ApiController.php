<?php

namespace App\Controller;

use App\Entity\ContactMessage;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/api')]
class ApiController extends AbstractController
{
    #[Route('/projects', name: 'api_projects', methods: ['GET'])]
    public function projects(EntityManagerInterface $em): JsonResponse
    {
        $projects = $em->getRepository(Project::class)->findAll();

        return $this->json(array_map(fn(Project $p) => $p->toArray(), $projects));
    }

    #[Route('/projects/{id}', name: 'api_project', methods: ['GET'])]
    public function project(int $id, EntityManagerInterface $em): JsonResponse
    {
        $project = $em->getRepository(Project::class)->find($id);

        if (!$project) {
            return $this->json(['error' => 'Project not found'], Response::HTTP_NOT_FOUND);
        }

        return $this->json($project->toArray());
    }

    #[Route('/contact', name: 'api_contact', methods: ['POST'])]
    public function contact(Request $request, EntityManagerInterface $em, ValidatorInterface $validator): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return $this->json(['error' => 'Invalid JSON'], Response::HTTP_BAD_REQUEST);
        }

        $constraints = new Assert\Collection([
            'name'    => [new Assert\NotBlank(), new Assert\Length(['max' => 255])],
            'email'   => [new Assert\NotBlank(), new Assert\Email()],
            'phone'   => new Assert\Optional([new Assert\Length(['max' => 50])]),
            'subject' => [new Assert\NotBlank(), new Assert\Length(['max' => 100])],
            'message' => [new Assert\NotBlank()],
        ]);

        $violations = $validator->validate($data, $constraints);

        if (count($violations) > 0) {
            $errors = [];
            foreach ($violations as $v) {
                $errors[] = $v->getPropertyPath() . ': ' . $v->getMessage();
            }
            return $this->json(['errors' => $errors], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $msg = (new ContactMessage())
            ->setName($data['name'])
            ->setEmail($data['email'])
            ->setPhone($data['phone'] ?? null)
            ->setSubject($data['subject'])
            ->setMessage($data['message']);

        $em->persist($msg);
        $em->flush();

        return $this->json(['success' => true, 'id' => $msg->getId()], Response::HTTP_CREATED);
    }
}
