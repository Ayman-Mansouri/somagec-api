FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libicu-dev \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql pgsql intl opcache \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN php bin/console cache:warmup --env=prod --no-debug

EXPOSE 8080

CMD php bin/console doctrine:migrations:migrate --no-interaction --env=prod --allow-no-migration \
    && php -S 0.0.0.0:8080 -t public/
