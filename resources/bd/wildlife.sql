-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 12 2023 г., 12:29
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wildlife`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `img_places`
--

CREATE TABLE `img_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_place` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `img_places`
--

INSERT INTO `img_places` (`id`, `id_place`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/download/1683881649Rectangle 83.png', '2023-05-12 05:54:09', '2023-05-12 05:54:09'),
(2, 1, 'img/download/1683881659Rectangle 17.png', '2023-05-12 05:54:19', '2023-05-12 05:54:19'),
(3, 1, 'img/download/1683881674Rectangle 16.png', '2023-05-12 05:54:34', '2023-05-12 05:54:34'),
(4, 1, 'img/download/1683881685image 12.png', '2023-05-12 05:54:45', '2023-05-12 05:54:45'),
(5, 1, 'img/download/1683881697Rectangle 79.png', '2023-05-12 05:54:57', '2023-05-12 05:54:57'),
(6, 1, 'img/download/1683881710Rectangle 159.png', '2023-05-12 05:55:10', '2023-05-12 05:55:10'),
(7, 1, 'img/download/1683881725Rectangle 78.png', '2023-05-12 05:55:25', '2023-05-12 05:55:25');

-- --------------------------------------------------------

--
-- Структура таблицы `img_tours`
--

CREATE TABLE `img_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tour` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `img_tours`
--

INSERT INTO `img_tours` (`id`, `id_tour`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/download/1683716939Rectangle 2.png', '2023-05-10 08:08:59', '2023-05-10 08:08:59'),
(2, 1, 'img/download/1683716947image 12.png', '2023-05-10 08:09:08', '2023-05-10 08:09:08'),
(3, 1, 'img/download/1683716959Rectangle 18.png', '2023-05-10 08:09:19', '2023-05-10 08:09:19'),
(4, 2, 'img/download/1683882900Rectangle 2.png', '2023-05-12 06:15:00', '2023-05-12 06:15:00'),
(5, 2, 'img/download/1683882910Rectangle 18.png', '2023-05-12 06:15:10', '2023-05-12 06:15:10'),
(6, 2, 'img/download/1683882918image 12.png', '2023-05-12 06:15:18', '2023-05-12 06:15:18'),
(7, 2, 'img/download/1683882929Rectangle 82.png', '2023-05-12 06:15:29', '2023-05-12 06:15:29'),
(8, 2, 'img/download/1683882941image 9.png', '2023-05-12 06:15:41', '2023-05-12 06:15:41'),
(9, 2, 'img/download/1683882952Rectangle 83.png', '2023-05-12 06:15:52', '2023-05-12 06:15:52'),
(10, 2, 'img/download/1683882960image 11.png', '2023-05-12 06:16:00', '2023-05-12 06:16:00');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_05_045647_create_places_table', 1),
(6, '2023_04_05_045720_create_tours_table', 1),
(7, '2023_04_05_090650_create_requests_table', 1),
(8, '2023_04_06_071201_create_img_places_table', 1),
(9, '2023_04_06_071218_create_img_tours_table', 1),
(10, '2023_04_11_073248_create_admins_table', 1);

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
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\User', 1, 'user_token', '6117d8e04de25484c718aff3ac10e7d36ce9ea7bd09cab587f002a6c4751d1b3', '[\"*\"]', NULL, NULL, '2023-05-12 05:48:55', '2023-05-12 05:48:55');

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `places`
--

INSERT INTO `places` (`id`, `title`, `short_description`, `title_description`, `description`, `main_img`, `created_at`, `updated_at`) VALUES
(1, 'Кавказ', 'Манящий Кавказ', 'ГОРНАЯ СИСТЕМА НА ЮГЕ РОССИИ', 'Здесь играют лучами яркого солнца ледяные цепи гор, а со склонов спускаются дремучие леса, уступая место поросшим цветами и разнотравьем лугам. Здесь озера и реки хранят вековые тайны, а древние храмы и усыпальницы берегут историю этих мест. Здесь, на южной окраине России, встречают гостеприимные жители. Отдых на Северном Кавказе в 2023 году понравится и тем, кому по душе размеренный ритм, и любителям приключений.', 'img/download/1683881632Rectangle 116.png', '2023-05-10 05:55:39', '2023-05-12 05:53:53');

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tour` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_born` date NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `id_tour`, `name`, `date_born`, `phone_number`, `gmail`, `card_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'Атщ Лстс Льдсвь', '2023-05-09', '+70000000000', 'kcdnson@pfpr.sdlmv', 0, '2023-05-12 05:07:15', '2023-05-12 05:07:15'),
(2, 1, 'Ыа ав выаыва', '2024-03-02', 'уке', 'kcdnson@pfpr.sdlmv', 0, '2023-05-12 05:08:17', '2023-05-12 05:08:17');

-- --------------------------------------------------------

--
-- Структура таблицы `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_place` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `people_count` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `priсe` int(11) NOT NULL,
  `main_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `complexity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tours`
--

INSERT INTO `tours` (`id`, `id_place`, `title`, `short_description`, `description`, `people_count`, `date`, `priсe`, `main_img`, `description_img`, `complexity`, `features`, `created_at`, `updated_at`) VALUES
(1, 1, 'Эльбрус', 'льамдлавдлмтвадытвыхтивпти жатвыжд тжад двп жрв  рмжр в рв рамо рвыр в  рв рва ыр рв рва  рав р', 'ы ао ры ма ровыа рвы а оваы ол ыавл ом олы мвл  ым  ымв тыва т ммт мв ттттттмв тм м вт мвт мтл омлоымвтмы о тоыав тавыт лмав мта в  а тдым', 8, 5, 12000, 'img/download/1683716901Rectangle 16.png', 'img/download/1683716901Polygon 7.png', 'Сложно', 'Красивые виды%Прекрасные горы%Вкусная еда%Тёплая атмосфера', '2023-05-10 08:08:21', '2023-05-10 08:08:21'),
(2, 1, 'Эльбрус', 'Подъем на самую высокую гору в России? Легко!', 'Двуглавая гора Эльбрус, расположенная на самой границе республик Кабардино-Балкария и Карачаево-Черкесия, \r\nчуть севернее Главного Кавказского хребта, —\r\nсамая высокая точка России — по праву \r\nсчитается одним из семи чудес \r\nнашей страны.', 15, 7, 15000, 'img/download/1683882811Rectangle 111.png', 'img/download/1683882811Polygon 7.png', 'Средняя', 'Уютные номера в гостинице с видом на кавказские пейзажи.%Подъем по канатной дороге к самой вершине. Ощутите свежий горный воздух!%Вкуснейшая кавказская кухня.%Экскурсии по всем красотам окрестностей Эльбруса.', '2023-05-12 06:13:31', '2023-05-12 06:13:31');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `img_places`
--
ALTER TABLE `img_places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img_places_id_place_foreign` (`id_place`);

--
-- Индексы таблицы `img_tours`
--
ALTER TABLE `img_tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img_tours_id_tour_foreign` (`id_tour`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_id_tour_foreign` (`id_tour`);

--
-- Индексы таблицы `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tours_id_place_foreign` (`id_place`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `img_places`
--
ALTER TABLE `img_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `img_tours`
--
ALTER TABLE `img_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `img_places`
--
ALTER TABLE `img_places`
  ADD CONSTRAINT `img_places_id_place_foreign` FOREIGN KEY (`id_place`) REFERENCES `places` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `img_tours`
--
ALTER TABLE `img_tours`
  ADD CONSTRAINT `img_tours_id_tour_foreign` FOREIGN KEY (`id_tour`) REFERENCES `tours` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_id_tour_foreign` FOREIGN KEY (`id_tour`) REFERENCES `tours` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_id_place_foreign` FOREIGN KEY (`id_place`) REFERENCES `places` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
