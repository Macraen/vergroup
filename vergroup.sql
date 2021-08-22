-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 22 2021 г., 20:13
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vergroup`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `main_pages`
--

CREATE TABLE `main_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`value`)),
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main_pages`
--

INSERT INTO `main_pages` (`id`, `value`, `key`, `created_at`, `updated_at`) VALUES
(1, '{\"skills\":\"<h2>UI\\/UX design, Application design, UX research, Visual communication, Prototyping, Wireframing, HTML\\/CSS\\/JavaScript<\\/h2>\",\"clients\":\"<h2>Artworx, Mito, Maironti, Bikerist, Fibrolo, Decoroto, Drankso.<\\/h2>\",\"ico1\":\"\\/files\\\\logo-07-64x64.png\",\"ico2\":\"\\/files\\\\logo-08-64x64.png\",\"ico3\":\"\\/files\\\\logo-09-64x64.png\",\"ico4\":\"\\/files\\\\logo-10-64x64.png\"}', 'skills', '2021-08-19 11:52:14', '2021-08-19 12:59:17'),
(5, '{\"main_text\":\"<p>Im Ralph Peterson, a twenty-six-year-old UI\\\\UX designer from Los Angeles, CA<\\/p>\",\"small_text\":\"<p>Currently I am co-leading a design<br \\/>team at Intense web design studio.<\\/p>\",\"button_text\":\"Contact Me\",\"image\":\"\\/files\\\\images-25-510x593.jpg\"}', 'poster', '2021-08-20 10:16:06', '2021-08-20 15:26:59'),
(6, '{\"experience_text1\":\"<p>LA Web Studio,<br \\/>Junior Designer<\\/p>\\r\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: -66px; top: -12px;\\\">\\r\\n<div class=\\\"gtx-trans-icon\\\">&nbsp;<\\/div>\\r\\n<\\/div>\",\"year_experience1\":\"2012\",\"experience_text2\":\"<p>Xtra Web,<br \\/>UX Designer<\\/p>\",\"year_experience2\":\"2014\",\"experience_text3\":\"<p>Pixx Creative Studio,<br \\/>Leading UX designer<\\/p>\",\"year_experience3\":\"2017\",\"experience_text4\":\"<p>ZGP Web Agency,<br \\/>Product Designer<\\/p>\",\"year_experience4\":\"2018\",\"experience_text5\":\"<p>Intense,<br \\/>Leading UI\\/UX designer<\\/p>\",\"year_experience5\":\"2019\",\"experience_text6\":null,\"year_experience6\":null,\"experience_text7\":null,\"year_experience7\":null,\"experience_text8\":null,\"year_experience8\":null}', 'experience', '2021-08-20 11:45:56', '2021-08-20 11:45:56'),
(7, '{\"main_text\":\"<p><br \\/>Let&rsquo;s talk about your project and how I can help you. Even if you just want to chat about your future web project, feel free to get in touch with me.<\\/p>\",\"email\":\"macraen.dev@gmail.com\"}', 'contact', '2021-08-21 12:33:43', '2021-08-21 12:33:43'),
(8, '{\"main_text\":\"<h2>I have designed dozens of appealing interfaces for websites and web apps. Take a look at my projects below.<\\/h2>\",\"logo1\":\"\\/files\\\\partner-1-inverse-180x49.png\",\"name1\":\"Website interface design\",\"link1\":\"https:\\/\\/rozetka.com.ua\\/xiaomi_haylougt6bk\\/p306155188\\/\",\"logo2\":\"\\/files\\\\partner-2-inverse-133x38.png\",\"name2\":\"UX design\",\"link2\":\"https:\\/\\/rozetka.com.ua\\/xiaomi_haylougt6bk\\/p306155188\\/\",\"logo3\":\"\\/files\\\\partner-3-inverse-180x45.png\",\"name3\":\"Motion design\",\"link3\":\"https:\\/\\/rozetka.com.ua\\/xiaomi_haylougt6bk\\/p306155188\\/\",\"logo4\":\"\\/files\\\\partner-4-inverse-107x31.png\",\"name4\":\"Web application UI design\",\"link4\":\"https:\\/\\/rozetka.com.ua\\/xiaomi_haylougt6bk\\/p306155188\\/\",\"logo5\":null,\"name5\":null,\"link5\":null,\"logo6\":null,\"name6\":null,\"link6\":null}', 'projects', '2021-08-21 14:11:07', '2021-08-21 14:59:04');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_08_16_151608_create_permission_tables', 2),
(6, '2021_08_17_183111_create_posters_table', 3),
(7, '2021_08_19_111632_create_main_pages_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user_create', 'web', '2021-08-22 11:07:45', '2021-08-22 11:07:45'),
(2, 'user_edit', 'web', '2021-08-22 11:07:45', '2021-08-22 11:07:45'),
(3, 'user_show', 'web', '2021-08-22 11:07:45', '2021-08-22 11:07:45'),
(4, 'user_delete', 'web', '2021-08-22 11:07:45', '2021-08-22 11:07:45'),
(5, 'main_edit', 'web', '2021-08-22 11:07:45', '2021-08-22 11:07:45'),
(6, 'permission_admin_panel', 'web', '2021-08-22 11:47:57', '2021-08-22 11:47:57');

-- --------------------------------------------------------

--
-- Структура таблицы `posters`
--

CREATE TABLE `posters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`image`)),
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posters`
--

INSERT INTO `posters` (`id`, `main_text`, `small_text`, `image`, `button_text`, `created_at`, `updated_at`) VALUES
(2, '<p>I&rsquo;m Ralph Peterson, a twenty-six-year-old UI/UX designer from Los Angeles, CA</p>', '<p>Currently I am co-leading a design team at Intense web design studio.</p>', '{\"main_text\":\"<p>I&rsquo;m Ralph Peterson, a twenty-six-year-old UI\\/UX designer from Los Angeles, CA<\\/p>\",\"small_text\":\"<p>Currently I am co-leading a design team at Intense web design studio.<\\/p>\",\"button_text\":\"Contact Me\",\"image\":\"\\/files\\\\images-25-510x593.jpg\"}', 'Contact Me', '2021-08-19 12:30:16', '2021-08-19 11:36:54');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2021-08-16 12:20:58', '2021-08-16 12:20:58'),
(2, 'admin', 'web', '2021-08-16 12:22:59', '2021-08-16 12:22:59'),
(3, 'moderator', 'web', '2021-08-16 12:23:06', '2021-08-16 12:23:06');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(5, 3),
(6, 2),
(6, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Macraen', 'macraen.dev@gmail.com', NULL, '$2y$10$2HNs2g65sV2/aVrdHFHRaORa3pxS6DPMIpdaIhrmTQfMqMPuhF6Ee', NULL, NULL, NULL, '2021-08-16 12:36:00', '2021-08-17 12:55:19'),
(3, 'admin', 'admin@vergroup.company', NULL, '$2y$10$i2c9xwPJAZ4e6lwBCssrge9DvnKbNHPAZ5HmWKzgIRx1MwkJYeBUa', NULL, NULL, 'eVw0peA7ocqJp2EIp56sE1VJvrt30Erl8LUGYa5Ok5L2vjJlWqhYwKBxsart', '2021-08-16 12:37:27', '2021-08-16 12:37:27'),
(5, 'Moderator', 'moderator@vergroup.company', NULL, '$2y$10$Bs4u2yvyPNo6dFaPzzHTN.wLARwLmklPNbvPyxaiS40zBGH5Tceq6', NULL, NULL, NULL, '2021-08-17 09:50:04', '2021-08-17 09:50:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `main_pages`
--
ALTER TABLE `main_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `main_pages`
--
ALTER TABLE `main_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `posters`
--
ALTER TABLE `posters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
