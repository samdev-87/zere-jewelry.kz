create table `users`
(
    `id`                bigint unsigned not null auto_increment primary key,
    `name`              varchar(255)    not null,
    `email`             varchar(255)    not null,
    `email_verified_at` timestamp       null,
    `password`          varchar(255)    not null,
    `remember_token`    varchar(100)    null,
    `created_at`        timestamp       null,
    `updated_at`        timestamp       null
) default character set utf8mb4
  collate 'utf8mb4_unicode_ci';
alter table `users`
    add unique `users_email_unique` (`email`);

create table `password_reset_tokens`
(
    `email`      varchar(255) not null,
    `token`      varchar(255) not null,
    `created_at` timestamp    null
) default character set utf8mb4
  collate 'utf8mb4_unicode_ci';
alter table `password_reset_tokens`
    add primary key (`email`);

create table `password_resets`
(
    `email`      varchar(255) not null,
    `token`      varchar(255) not null,
    `created_at` timestamp    null
) default character set utf8mb4
  collate 'utf8mb4_unicode_ci';
alter table `password_resets`
    add index `password_resets_email_index` (`email`);

create table `failed_jobs`
(
    `id`         bigint unsigned not null auto_increment primary key,
    `uuid`       varchar(255)    not null,
    `connection` text            not null,
    `queue`      text            not null,
    `payload`    longtext        not null,
    `exception`  longtext        not null,
    `failed_at`  timestamp       not null default CURRENT_TIMESTAMP
) default character set utf8mb4
  collate 'utf8mb4_unicode_ci';
alter table `failed_jobs`
    add unique `failed_jobs_uuid_unique` (`uuid`);

create table `personal_access_tokens`
(
    `id`             bigint unsigned not null auto_increment primary key,
    `tokenable_type` varchar(255)    not null,
    `tokenable_id`   bigint unsigned not null,
    `name`           varchar(255)    not null,
    `token`          varchar(64)     not null,
    `abilities`      text            null,
    `last_used_at`   timestamp       null,
    `expires_at`     timestamp       null,
    `created_at`     timestamp       null,
    `updated_at`     timestamp       null
) default character set utf8mb4
  collate 'utf8mb4_unicode_ci';
alter table `personal_access_tokens`
    add index `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`, `tokenable_id`);
alter table `personal_access_tokens`
    add unique `personal_access_tokens_token_unique` (`token`);

create table `products`
(
    `id`          bigint unsigned not null auto_increment primary key,
    `article`     varchar(50)     not null,
    `name`        varchar(150)    not null,
    `description` text            not null,
    `parent`      varchar(150)    null,
    `image`       varchar(255)    not null,
    `price`       int             not null,
    `created_at`  timestamp       null,
    `updated_at`  timestamp       null
) default character set utf8mb4
  collate 'utf8mb4_unicode_ci';

alter table `users`
    add `role` varchar(255) not null default 'client'
