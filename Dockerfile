FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libicu-dev \
    unzip \
    curl \
    && docker-php-ext-install pdo pdo_pgsql pgsql intl opcache \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts --no-audit

RUN APP_ENV=prod APP_SECRET=buildsecret php bin/console cache:warmup --env=prod --no-debug

EXPOSE 8080

CMD php bin/console doctrine:migrations:migrate --no-interaction --env=prod --allow-no-migration \
    && php -S 0.0.0.0:8080 -t public/
