-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2024 a las 17:29:37
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbburotributario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audios`
--

CREATE TABLE `audios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `file_audio` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `audios`
--

INSERT INTO `audios` (`id`, `course_id`, `name`, `description`, `file_audio`, `created_at`, `updated_at`) VALUES
(1, 5, 'Temporibus aut.', 'Quia et labore distinctio. Omnis dolore nam vel necessitatibus autem quas. Vero dolorum voluptas ipsum fuga doloremque ut.', '2.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(2, 13, 'Enim error ut.', 'Quisquam unde perspiciatis aut accusantium est amet. Officia odio temporibus fugiat. Provident rerum atque culpa harum. Recusandae numquam fugiat neque dolorem architecto velit ut.', '3.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(3, 20, 'Aut placeat magnam.', 'Quos omnis amet maiores autem laborum quasi est fuga. Aut cumque perferendis quibusdam rerum officia tempore dolores. Dolore est odio sequi aliquam omnis natus ab quia. Numquam doloremque similique doloribus consequuntur reiciendis. Voluptatem rerum dolor illum debitis.', '5.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(4, 16, 'Voluptatem praesentium.', 'Necessitatibus culpa repellat reiciendis aspernatur. Sed qui laborum excepturi veritatis corrupti aliquam nam. Tenetur est eum sequi dolores ut sunt voluptas. Dolores distinctio dicta autem consequuntur est quia nesciunt laudantium.', '2.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(5, 30, 'Ut incidunt consequatur.', 'Dolorum alias ut ab saepe dolores sit necessitatibus. Veritatis necessitatibus rerum saepe dolorum molestias deserunt. Quibusdam velit fuga in eos quasi necessitatibus.', '1.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(6, 29, 'Doloribus aut qui.', 'Alias a molestiae est rem in. Optio earum ducimus corporis fugit explicabo cupiditate. Necessitatibus blanditiis in voluptatem mollitia.', '4.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(7, 16, 'Aliquam dicta totam.', 'Mollitia possimus quasi voluptatem dolor voluptas. Numquam omnis laboriosam eos. Voluptatum magni nihil provident tenetur sunt aut.', '1.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(8, 17, 'Non dolor laborum.', 'Dicta aut esse est quo perspiciatis velit vero. Eos iusto dolore sapiente voluptatibus totam dolore est. Eveniet itaque quam vel sint nulla fuga rerum. Omnis dolores aut sed minus molestias repellendus.', '1.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(9, 22, 'Veritatis et.', 'Labore adipisci vel molestiae expedita. Nulla vitae distinctio ut blanditiis sed veniam. Amet ratione deleniti omnis facere nihil velit.', '1.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(10, 4, 'Deleniti quidem eum.', 'Ut cupiditate vero iusto beatae voluptatum. Tenetur commodi repudiandae ut esse voluptas sint harum. Porro ratione inventore voluptatem natus.', '3.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(11, 23, 'Voluptatem at.', 'Et reiciendis nisi ipsa enim. Et aliquam rerum autem voluptas magni tenetur.', '3.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(12, 14, 'Nulla et non.', 'Similique a cumque expedita possimus. Placeat aut ipsam occaecati sit doloremque. Labore qui eaque aut sunt quas voluptatem. Ut qui ad porro non.', '1.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(13, 20, 'Et eos.', 'Repudiandae dolorum aut et quis in. Ratione quis velit ratione minima ut qui. Minima suscipit aliquid alias animi. Enim voluptatem voluptatibus soluta ex magnam.', '2.mp3', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(14, 11, 'Molestiae quidem earum.', 'Molestias qui temporibus omnis aliquid. Consequatur repellat distinctio voluptatem eligendi et magnam. Saepe cupiditate quis numquam iste natus distinctio non. Totam voluptates possimus enim et iusto nobis et voluptatem.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(15, 13, 'Minus omnis ut.', 'Illum id natus aut temporibus fugit recusandae. Aliquam iste ut et nulla ut pariatur. Eos minus expedita excepturi veritatis esse perspiciatis et. Sint et dignissimos et ipsam ut inventore qui.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(16, 21, 'Neque enim eum.', 'Vel earum magnam iste. Occaecati a eum nobis et et. Necessitatibus et et ut. Hic dolor molestiae est et.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(17, 28, 'Nisi repellendus.', 'Deleniti illo voluptatem iure molestiae voluptas doloribus. Nemo ut maiores voluptatum. Voluptas soluta veniam ad quia.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(18, 12, 'Delectus possimus facere.', 'Odio quaerat explicabo ea est. Exercitationem nihil porro officia iste quaerat dolorem harum voluptas. Tenetur nisi labore at quo. Doloribus nam iusto vel deserunt laboriosam.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(19, 14, 'Excepturi fuga quis.', 'Doloribus incidunt velit culpa aliquam quia. Aut voluptas ad suscipit. Aliquam inventore quaerat rerum eveniet dolorum.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(20, 2, 'Ad et.', 'Saepe eos autem expedita quam qui dolores molestias. Quo ad quibusdam sint exercitationem. Voluptatibus aliquam et aperiam excepturi odio atque voluptatibus alias. Voluptates rerum ut ab accusantium sequi.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(21, 23, 'Esse omnis.', 'Et facilis perspiciatis quam excepturi quas laboriosam qui. Laboriosam occaecati et porro provident omnis. Eos possimus officiis in molestias. Cumque ut dolorem eum porro et ab nobis consequatur.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(22, 13, 'Officia perspiciatis est.', 'Quae quasi labore adipisci non temporibus nemo officiis. Sapiente enim est maiores voluptatem assumenda. Non eligendi non facere velit temporibus nihil sunt. Quis dolore ipsam beatae at. Est et dolor sit repellendus reiciendis et.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(23, 19, 'Saepe illo.', 'Natus sit ut cupiditate libero. Vero aliquid tenetur qui fuga molestiae. Aliquid voluptatem ut sapiente natus sint hic earum.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(24, 12, 'Beatae amet nam.', 'Consequatur perspiciatis sed fugiat. Voluptate voluptatum architecto iusto repellendus ea dolor in. Vero sed enim veritatis ut molestiae dolorem porro.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(25, 4, 'Voluptate omnis et.', 'Laboriosam ut molestiae sint ut sequi iste. Exercitationem quia quo incidunt. Repellendus quas nihil odio totam distinctio et commodi. Consequatur perferendis expedita repellat sed.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(26, 29, 'Sed dolores illum.', 'Atque assumenda debitis ab ab laborum quia. Rerum sapiente rem ipsum porro adipisci quidem aliquid. Iure corporis qui quia alias ad. Dolores ut itaque nulla minus at accusamus necessitatibus. Laboriosam est labore beatae a ea voluptas esse.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(27, 26, 'Eaque sit molestias.', 'Fugit asperiores quidem consectetur at sequi est sit. Aut ad officiis repellendus facilis et. Possimus dolores hic amet minima minima ut.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(28, 16, 'Enim vero qui.', 'Adipisci labore aut et magni saepe explicabo odio. Doloremque dicta voluptatibus eveniet autem facilis. Quas quam aliquam vel molestiae excepturi architecto omnis. Laboriosam quia aut est molestias iusto perferendis sunt.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(29, 23, 'Nesciunt nostrum explicabo.', 'Voluptas quia molestiae suscipit at et modi. Ut rerum sed et ea aut impedit. Laboriosam est facere vitae laboriosam nesciunt. Quo delectus nihil molestiae ipsum id fugit doloribus.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(30, 22, 'Voluptas quidem laboriosam.', 'Excepturi illum quia itaque delectus. Ut aut facere odit.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(31, 17, 'Sit quia.', 'Id ut laboriosam vero quisquam quam velit. Recusandae iusto et quasi et. Cumque explicabo itaque illo ut. Magnam dolorem dolore quaerat dolorem.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(32, 18, 'Qui exercitationem rerum.', 'Voluptatibus vel et alias sint tempore. Quisquam id molestiae molestiae ipsam distinctio et qui. Nulla consectetur enim est dolore dolorum maiores.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(33, 13, 'Illum aut eos.', 'Quia accusantium reiciendis libero placeat adipisci. Reiciendis magni error cupiditate ad. Vel inventore dolore adipisci et.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(34, 9, 'Veritatis omnis.', 'Consequatur nobis optio repudiandae voluptatem est ipsum. Voluptatem est tempora laborum minima error. Laboriosam ut velit quo qui. Omnis et maiores eos facilis perferendis sit molestiae.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(35, 23, 'Error quam.', 'Optio tempore autem quia quasi est. Quis consequatur voluptas ut quo.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(36, 10, 'Illo exercitationem.', 'Nihil magni consequatur natus quae laboriosam fuga. Qui est quo et facilis. Sit ut aut voluptatem odit nulla et.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(37, 9, 'Quis ducimus.', 'Quo in excepturi quis animi ut. Officiis quia autem sit libero quas facere. In et ut delectus maiores. Facere doloremque quis qui doloremque. Quia in hic tempora.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(38, 4, 'Dolores dolores.', 'Doloremque et a placeat harum quisquam omnis. Repellat repellat quos sint error velit. Autem rerum dolorem facere dolorem est cupiditate. Dolorem omnis a laudantium quo incidunt nihil.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(39, 30, 'Qui optio.', 'Sint omnis distinctio vero aspernatur dolor odit voluptatum in. Suscipit fuga voluptatum dicta quo vel adipisci. Eos fugit ea quas beatae. Repellendus eveniet quas quia.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(40, 2, 'Cupiditate accusamus aspernatur.', 'Est velit et repudiandae incidunt. Corporis quam quia necessitatibus voluptate unde amet consectetur eaque. Error doloribus consequatur voluptatem sed veritatis aliquid.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(41, 18, 'Voluptate voluptatibus.', 'Sed deserunt sint sunt alias numquam eos. Ex doloribus similique quo deleniti rerum perferendis. Ducimus rerum aut voluptas consequatur animi explicabo fugiat. Possimus quia totam quia ex fugiat qui accusamus.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(42, 25, 'Ut qui sit.', 'Qui hic mollitia quod error. Maxime aperiam quia vel deleniti. Reprehenderit aliquid eos a ipsum eaque. Voluptatem quibusdam quam aut animi veritatis esse et. Sed ex cum quos hic fugit velit eum.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(43, 12, 'Incidunt a reprehenderit.', 'Laborum mollitia quidem ut. Magnam et ut ipsum magnam repudiandae earum non nisi. Veritatis tempora sunt aperiam porro. Labore vitae cumque laudantium est.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(44, 23, 'Ab est nihil.', 'Omnis voluptas deserunt praesentium fugit. Et eveniet tempora expedita ullam ducimus cupiditate. Quidem nam et temporibus nam neque accusamus. Labore est nobis nobis soluta.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(45, 30, 'Est sapiente.', 'Quod impedit similique eaque corrupti dolor aut. Autem quam voluptates ex dolorum laboriosam et. Optio dolorem dolores itaque fuga aut aliquid. Necessitatibus rerum est eius sit veritatis ducimus.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(46, 30, 'Pariatur enim inventore.', 'Reprehenderit iste in aliquam iste. Adipisci voluptas sapiente et consequatur temporibus et consequatur. Id dolores est aut laborum autem ea voluptas. Voluptatem culpa autem totam molestiae.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(47, 4, 'Rerum rem aliquam.', 'Totam sit et qui et ex quis laudantium. Consequatur quo repellendus magnam. Cum vitae ipsa qui odit cumque tempore non dolorem.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(48, 27, 'Totam qui.', 'Sit ut incidunt impedit voluptatem. Et quis sed dignissimos quo enim.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(49, 3, 'Voluptatibus odio.', 'Architecto possimus et est libero. Quasi accusamus fuga quod quos. Cupiditate veritatis voluptas temporibus consectetur sint ut expedita aliquid. Vel eum dolores cupiditate qui.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(50, 27, 'Qui sit.', 'Nesciunt consequuntur esse aut nisi qui eum sunt nam. Cumque facilis aut non commodi accusamus. Illum voluptas sint et.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(51, 9, 'Rem libero et.', 'Dignissimos consectetur quasi quia recusandae ea. Ullam saepe qui autem voluptate. Ea in vel iure non. Commodi maxime quasi suscipit hic aut non voluptas. Minima explicabo ducimus officiis nobis dolorum.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(52, 23, 'Eos provident.', 'Voluptatem labore distinctio ut voluptatum id mollitia ut. Dolorum occaecati ut a aut qui perspiciatis aspernatur numquam. Magni omnis labore beatae porro laborum unde. Nam qui praesentium dicta earum earum qui quis.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(53, 27, 'Est quos.', 'Soluta et repudiandae placeat quaerat consequuntur. Atque nihil dolor et vel alias ex. Magni aut delectus dolore vitae. Quis earum dolorem nemo alias.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(54, 20, 'Consequatur aut et.', 'Ipsa et consequatur quisquam eum. Repellendus quis qui molestiae laboriosam. Enim voluptatum est ad error doloribus aut.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(55, 26, 'Iure sint doloribus.', 'Est omnis nihil eum aut est consequatur repellendus. Quos ea minus pariatur earum quisquam. Sed in et accusamus distinctio vero.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(56, 1, 'Quaerat autem facilis.', 'Ut veniam esse suscipit et laudantium ut. Quam velit dolor atque sunt rerum harum esse dolor. Corporis eius nobis eaque praesentium dolores. Deserunt placeat pariatur itaque tempora dolor voluptatem praesentium.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(57, 17, 'Voluptatem harum.', 'Quia a maiores accusamus dolores rerum cum nulla. Est fugit ut rerum mollitia.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(58, 8, 'Et enim.', 'Delectus accusantium commodi nostrum eligendi. Earum et corporis vel in minus perferendis et velit. Voluptas nihil consequatur aspernatur ea voluptatem. Cumque odit corrupti illo consequatur aliquam.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(59, 25, 'Ratione omnis.', 'Qui nostrum error ea. Iure hic incidunt amet autem atque quod velit. Animi saepe eos quibusdam reprehenderit nostrum et nesciunt sed.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(60, 10, 'Sunt eligendi sunt.', 'Autem placeat repellendus aliquid eos sunt. Sunt qui ut nam eos quam quos enim praesentium. Dolor et aperiam sapiente ea veniam asperiores.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(61, 18, 'Necessitatibus cum.', 'Dolorum et ratione error. Repellendus quo dolorem repudiandae. Quia magnam ut nisi eius.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(62, 19, 'Nemo minima eaque.', 'Ut quaerat est ipsam ullam dolorem quia sit. Voluptatem eveniet est saepe perspiciatis necessitatibus omnis dolores consequatur. Architecto dolorem nostrum quae sint. Dolorem vel quod neque qui.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(63, 9, 'Consequatur aut delectus.', 'Error et magni nam ducimus repellendus. Ut facere placeat consequatur ipsa at.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(64, 22, 'Consequuntur recusandae.', 'Ipsum ut minima minima voluptatem consequatur et. Asperiores voluptatem beatae modi quidem aliquid quibusdam et. Explicabo assumenda quisquam et commodi eum ea.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(65, 3, 'Corporis quia similique.', 'Perspiciatis expedita rem consequatur aliquam. Doloremque iusto earum laudantium quia. Accusantium quia aut molestiae doloremque qui.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(66, 14, 'Aliquam veniam.', 'Veritatis voluptates placeat veritatis eligendi dolor totam mollitia. Recusandae doloribus voluptatem vero id consequatur. Maiores quis magni est quia assumenda. Quisquam corporis libero beatae quo nostrum placeat beatae quae.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(67, 27, 'Illo id eveniet.', 'Qui odio at culpa quo dolor vel consectetur vitae. Velit architecto sunt nostrum. In earum inventore voluptas sunt officia. Inventore vero odit facilis quia repellendus ut quibusdam.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(68, 29, 'Voluptatem et.', 'Eos sed a et velit iste reprehenderit. Possimus asperiores ipsum autem. Mollitia rem eaque doloribus dolorem quisquam.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(69, 1, 'Quis ea.', 'Corrupti quae deleniti similique unde. Et quidem inventore harum est.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(70, 20, 'Pariatur est et.', 'Ut sapiente ut architecto aliquam dicta. Eveniet ut et non qui. Natus dolores aut voluptate exercitationem nulla deserunt suscipit.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(71, 17, 'In cumque repudiandae.', 'Consequatur quos nam fuga recusandae. Neque error quis ea totam aliquid consequatur. Est molestiae fuga qui exercitationem voluptas quisquam esse quia.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(72, 27, 'Dicta blanditiis cum.', 'Explicabo nobis et qui a. Incidunt nulla sapiente id. Natus ducimus et eum ut vel ad rerum.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(73, 14, 'Ad aut.', 'Excepturi ducimus nisi placeat provident. Nemo voluptas deleniti voluptatum id est. Doloremque qui excepturi est consequatur laboriosam.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(74, 25, 'Praesentium voluptas consequatur.', 'Illo harum officia commodi alias. Quis possimus mollitia dicta quis. Deleniti itaque sed nihil et eligendi quaerat. Unde exercitationem officia voluptas.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(75, 28, 'Alias sit.', 'Nesciunt occaecati unde esse consequatur laudantium qui sequi. Voluptatem est similique rem quod asperiores. Repellendus porro praesentium aliquam accusamus odit. Aliquid nesciunt architecto aut aliquid magnam sit voluptas. Perferendis incidunt in officiis ipsam perspiciatis.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(76, 30, 'Id iure doloribus.', 'Illo voluptate sapiente doloribus. Dolor voluptatum provident delectus quos tempora et nemo. Aliquid voluptate debitis iste culpa voluptatibus provident. Ad error a rerum eius ducimus inventore delectus est.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(77, 8, 'Facilis quia.', 'Vero dolorem enim earum dolorem repellendus itaque. Rem facilis minus ipsa. Tempora eligendi qui sequi qui dolorem. Vel laudantium vero numquam id voluptatem eos.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(78, 23, 'Amet voluptatem exercitationem.', 'Iste excepturi dicta sint aut ut aut. Ex et saepe corporis qui ipsam. Enim qui incidunt libero natus harum. Ullam vero animi amet saepe.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(79, 5, 'Aut nisi ut.', 'Dolore veritatis iure sit nostrum nesciunt omnis. Qui ut et sed laudantium itaque explicabo delectus at. Iste deserunt est iure et est nesciunt quae officiis. Autem et et nam nesciunt vitae quia aut quis.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(80, 25, 'Aperiam odit est.', 'Et ut nulla molestiae minus fuga qui. Facere dolor architecto consectetur sint expedita id. Minus alias aliquid sit.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(81, 7, 'Voluptas minus.', 'Ad qui velit natus quis. Non quasi consequuntur qui animi aliquam. Repudiandae suscipit minus quis rerum possimus nam.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(82, 25, 'Et vel eos.', 'Temporibus minima velit eligendi eaque perferendis neque aliquid omnis. Atque non deserunt itaque distinctio aut incidunt. Corrupti necessitatibus perferendis ab ut in.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(83, 7, 'Reprehenderit et.', 'Autem rem consequatur voluptatibus animi. Aut ea consequuntur modi ut. Vitae fuga labore est cum a delectus sunt.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(84, 26, 'Voluptas quo.', 'Aspernatur sunt ad reprehenderit voluptas dolores. Maxime et blanditiis ut totam perspiciatis ullam animi. Quidem tempore doloremque non atque est qui quam. Eligendi debitis ullam eius rerum impedit aut maxime iusto.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(85, 5, 'Ab ratione recusandae.', 'Excepturi ullam nam tempora delectus nihil. Nobis possimus fugiat libero rerum dolores error modi adipisci. Excepturi excepturi voluptas ab id neque.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(86, 9, 'Omnis modi dolore.', 'Modi quisquam sint et omnis quas. Nostrum dolorem qui voluptate id dolores. Rerum dolor quasi nobis est incidunt quisquam. Dicta provident aliquid nesciunt fuga est eos voluptatum. Voluptas aliquam perferendis repellat est incidunt odio rerum.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(87, 16, 'Eos iste.', 'Ea qui quis illum natus sint hic. Ut aut ut amet dolorem deleniti voluptatum. Unde incidunt nobis voluptate aut adipisci quia. Quam incidunt unde vel aut eos.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(88, 19, 'Distinctio aut quas.', 'Ducimus qui ipsum accusamus praesentium non. Beatae perferendis aut similique nam molestiae eligendi. Qui iusto repudiandae qui. Sed consequatur dolor voluptatem soluta.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(89, 23, 'Odio rerum.', 'Illo est quo quidem autem quo. Voluptatem occaecati dolores sunt nobis veniam. Molestias delectus voluptatum illum amet.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(90, 13, 'Maiores quo.', 'Nihil sint illo dolores veritatis. Dolores eligendi labore sed ex. Autem ut officiis velit qui.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(91, 26, 'Delectus voluptatem.', 'Eum et similique libero molestiae delectus sunt provident. Et laborum molestiae omnis soluta nesciunt natus eos. Magnam maiores pariatur nisi ratione enim quia. Dolores ad quia ut facilis sequi voluptate.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(92, 29, 'Voluptatem aliquam sit.', 'Est error impedit est deserunt. Necessitatibus neque maiores vitae aut voluptatem inventore. Et commodi laborum voluptatum sunt occaecati. Repudiandae esse sint esse voluptate aliquid suscipit. Eius deleniti similique velit nostrum.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(93, 22, 'Repellendus inventore sit.', 'Sint alias ut eos quia sint. Dolor et placeat incidunt maxime. Labore soluta sunt suscipit voluptate molestias.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(94, 4, 'Quia deserunt nam.', 'Maxime unde cupiditate asperiores quis. Voluptate culpa nostrum earum quibusdam reprehenderit. Reiciendis consequatur accusantium rerum non illum enim omnis fugiat.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(95, 16, 'Hic ut.', 'Dolor dolore magni non. Natus reiciendis dolores rerum. Et minima praesentium veritatis. Molestiae maxime non explicabo blanditiis optio ratione cumque.', '5.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(96, 6, 'Sint maiores vitae.', 'Illo doloremque nam non libero maxime dolorem earum. Voluptatem illum quia aut asperiores qui et. Dicta quis cupiditate nihil magni. Ut ipsum accusamus commodi et.', '4.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(97, 10, 'Exercitationem officia.', 'Ipsam amet est aliquam aut. Ducimus eos aliquid esse sit. Quo eaque mollitia aut sint excepturi quasi sed. Reprehenderit iusto adipisci aliquam quia qui aut exercitationem. Id nam aut nemo aut laudantium fuga magnam.', '1.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(98, 22, 'Incidunt similique veniam.', 'Quis et optio fuga. Nam voluptas sunt rerum in voluptatem. Rem magnam sunt voluptate quia impedit quas.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(99, 10, 'Maxime quaerat autem.', 'Culpa amet nemo ducimus dicta. Velit minima iste qui repudiandae quia. Porro doloribus voluptates et ea laudantium. Et esse earum sit occaecati quam ea atque.', '3.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(100, 26, 'Totam velit.', 'Ut tempore est dolores repellat sapiente nobis. Est sit dolorem atque repudiandae reprehenderit. Architecto mollitia aut illum esse.', '2.mp3', '2024-02-13 04:27:36', '2024-02-13 04:27:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_courses`
--

CREATE TABLE `category_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `show` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `category_courses`
--

INSERT INTO `category_courses` (`id`, `name`, `slug`, `description`, `show`, `popular`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Eius sunt.', 'repudiandae-asperiores-animi', 'Eligendi suscipit eveniet consectetur fugiat. Repellendus corporis rem maiores unde. Porro et consequatur sapiente magni voluptatem et animi.', 1, 1, 'cat-2.jpg', 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(2, 'Quasi ipsum quia.', 'ipsam-veniam', 'Perspiciatis consequatur ducimus sit sunt. Quos est nulla nemo velit. Aut architecto est quis architecto pariatur sapiente occaecati. Unde dolorem repudiandae sunt beatae rem officia aut.', 1, 1, 'cat-5.jpg', 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(3, 'Voluptas aut qui.', 'quia-modi', 'Est autem blanditiis omnis animi. Sit ratione nihil incidunt non veniam delectus dolor illum. Sint explicabo non molestiae impedit molestias vero. Laudantium vel ea minus.', 1, 1, 'cat-1.jpg', 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(4, 'Sed vel sit.', 'quidem-voluptates-doloribus', 'Voluptatem quis dolor neque quo. Dicta sit et perferendis autem. Aut quo quia numquam.', 1, 1, 'cat-4.jpg', 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(5, 'Temporibus consequatur.', 'eos-quas', 'Est voluptates reiciendis sint ducimus odio. Possimus aspernatur culpa quibusdam voluptate fugiat sunt. Dolor perspiciatis ratione adipisci ad aspernatur dolore officia ipsa. In accusamus aut sint vel dolores.', 1, 1, 'cat-4.jpg', 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(6, 'Molestiae fugiat.', 'rerum-autem-cupiditate', 'Eum omnis numquam dolores quam ratione. Aspernatur et laborum quae sint distinctio voluptatibus. Excepturi nisi dolorum sit maxime quidem et sint. Animi similique eum blanditiis sed. Aut doloremque reprehenderit aut quam cum assumenda voluptas.', 1, 1, 'cat-6.jpg', 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(7, 'Ex nihil et.', 'consectetur-nostrum-quis', 'Commodi deleniti et tenetur corrupti placeat officia. Nesciunt nisi in sunt dignissimos voluptas. Sunt ratione quia autem optio magni placeat. Est veritatis est quis eos iure minima.', 1, 1, 'cat-3.jpg', 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(8, 'Possimus ipsa est.', 'sit-repellat', 'Facere quia odit est facilis. Accusamus dolorum recusandae dolorem et numquam voluptates impedit. Est consequatur ut ipsam quis. Eveniet autem temporibus ab voluptatum est accusamus consequatur.', 1, 1, 'cat-5.jpg', 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(9, 'Eaque dicta ad.', 'debitis-perferendis', 'Et tenetur maxime quia quia ut. Impedit harum modi enim autem tempora beatae molestiae corporis. Repudiandae quis incidunt sit maiores explicabo.', 1, 1, 'cat-4.jpg', 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(10, 'Ducimus voluptas voluptatum.', 'quaerat-expedita', 'Dolorem nostrum et et at et est beatae. Expedita perspiciatis voluptas at quas consectetur temporibus nam.', 1, 1, 'cat-2.jpg', 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) DEFAULT NULL,
  `currency` varchar(191) NOT NULL,
  `currency_iso` varchar(191) NOT NULL,
  `currency_simbol` varchar(191) NOT NULL,
  `tax_status` tinyint(4) NOT NULL DEFAULT 0,
  `tax` int(11) NOT NULL DEFAULT 0,
  `paypal` tinyint(4) NOT NULL DEFAULT 0,
  `dbt` tinyint(4) NOT NULL DEFAULT 0,
  `shipping` decimal(11,2) NOT NULL DEFAULT 0.00,
  `shipping_description` mediumtext DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `store` int(11) NOT NULL DEFAULT 0,
  `shopify` int(11) NOT NULL DEFAULT 0,
  `shopify_link` varchar(500) DEFAULT NULL,
  `amazon` int(11) NOT NULL DEFAULT 0,
  `amazon_link` varchar(500) DEFAULT NULL,
  `advertisement` tinyint(4) NOT NULL DEFAULT 0,
  `advertisement_link` varchar(500) DEFAULT NULL,
  `advertisement_image` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configs`
--

INSERT INTO `configs` (`id`, `logo`, `currency`, `currency_iso`, `currency_simbol`, `tax_status`, `tax`, `paypal`, `dbt`, `shipping`, `shipping_description`, `email`, `store`, `shopify`, `shopify_link`, `amazon`, `amazon_link`, `advertisement`, `advertisement_link`, `advertisement_image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'USD $', 'USD', '$', 0, 0, 0, 0, '0.00', NULL, 'oszarata@szystems.com', 0, 0, NULL, 0, NULL, 0, NULL, NULL, '2024-02-13 04:27:33', '2024-02-13 04:27:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_course_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `show` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) DEFAULT NULL,
  `file_pdf` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `category_course_id`, `name`, `slug`, `description`, `show`, `popular`, `image`, `file_pdf`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Temporibus ullam qui.', 'tempora-nemo', 'Incidunt harum facere fuga quia ut. Aut nihil qui nam eaque voluptatem. Aut molestiae est voluptas. Cum excepturi ea voluptates qui est voluptates exercitationem.', 1, 1, 'course-3.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(2, 5, 'Cupiditate cupiditate necessitatibus.', 'molestiae-explicabo-libero', 'Consequatur ut aperiam dolore maiores eveniet exercitationem dolor quaerat. Ut animi iste et et odit illo. Accusantium omnis ut quibusdam voluptas fuga adipisci quas. Error incidunt dolorem quaerat quam ut.', 1, 1, 'course-3.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(3, 8, 'Aut magnam.', 'vel-tempora-repellendus', 'Exercitationem aliquam natus ut. Ex autem officia sit eum aliquam aperiam optio. Nesciunt laboriosam repellat et soluta. Eius id corporis et tenetur repellendus exercitationem perferendis et.', 1, 1, 'course-6.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(4, 9, 'Impedit consequatur molestiae.', 'qui-exercitationem-odio', 'Nulla sunt maxime explicabo esse eligendi aut omnis. Non totam nobis tempora labore dolorum aperiam odit. Labore eos occaecati temporibus rerum iusto libero et.', 1, 1, 'course-2.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(5, 4, 'Hic autem modi facilis ut.', 'dolore-ducimus-quibusdam', 'Omnis quis occaecati cum reiciendis et pariatur odit. Rem beatae sunt officia. Saepe iusto quos et est et ab. Aut velit et ut eaque occaecati illum aspernatur. Vel perferendis quidem id eum.', 1, 1, 'course-2.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(6, 4, 'Error quam ad vitae.', 'ad-rem-vitae', 'Est qui veniam aut ullam dolor nisi et. Consequatur harum repellat libero dolor deserunt eum enim. Maxime debitis fugiat nostrum dolores sit occaecati id.', 1, 1, 'course-4.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(7, 7, 'Deserunt ullam eaque.', 'quia-eius-sunt', 'Nulla nihil aspernatur vel animi exercitationem pariatur adipisci quia. Ex ratione temporibus libero et iste quo sunt ea. Dolores eaque dolorem sed qui sint.', 1, 1, 'course-2.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(8, 2, 'Id delectus non unde.', 'error-officia-illum', 'Necessitatibus eligendi veniam in ipsum delectus. Quia nobis voluptas cum deserunt quos eos et. Ut libero sit iure debitis quia nisi. Voluptatibus est magnam quo eaque dolorem cupiditate distinctio.', 1, 1, 'course-2.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(9, 3, 'Ea inventore enim.', 'est-labore-nisi', 'Est expedita optio modi dolores accusantium dolorum maiores rerum. Asperiores autem ut dolore modi repellat eveniet eos. Ad quasi error veritatis optio et et veritatis. Ullam rem at earum incidunt aut dolorem.', 1, 1, 'course-4.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(10, 4, 'Soluta quisquam et aperiam.', 'officiis-fuga-nesciunt', 'Maxime eos voluptas est perferendis molestiae. Et sit autem quasi nemo voluptates. Pariatur deleniti autem cupiditate voluptatem eius voluptatum.', 1, 1, 'course-5.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(11, 1, 'Rerum minus ut in.', 'id-quisquam-eveniet', 'Nulla occaecati culpa dolor nam deleniti fugit. Consectetur in rerum eos deserunt eum id. Voluptas at ipsum delectus dolores est.', 1, 1, 'course-2.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(12, 7, 'Dolor culpa error.', 'repellat-possimus-velit', 'Et iusto autem eum ut consequatur fugit. Praesentium odit omnis ut aut. Pariatur rerum mollitia at.', 1, 1, 'course-4.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(13, 8, 'Voluptatibus corrupti inventore voluptatem.', 'enim-enim-numquam', 'Laborum quasi et consequatur ut. Non sequi voluptate qui similique non. Ex aut ut possimus pariatur. Eum dolorum animi sit voluptate dolores.', 1, 1, 'course-1.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(14, 1, 'Quibusdam suscipit illum.', 'dolore-error', 'Nam reprehenderit beatae magni et non dolor sunt similique. Ratione sunt dolorum dolorum aut aut porro animi. Sed similique sit quia voluptatem. In numquam aut at numquam facilis quia nulla.', 1, 1, 'course-6.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(15, 8, 'Necessitatibus error.', 'aperiam-ducimus-omnis', 'Incidunt et iste ullam deserunt. In temporibus ratione harum vel illum. Est similique sint voluptatibus sed. Sunt officiis dolores praesentium et. Cum qui vero sequi eligendi perferendis.', 1, 1, 'course-4.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(16, 8, 'Natus at consectetur sed.', 'dicta-at-dolorum', 'Quibusdam nihil neque debitis vel. Voluptas voluptas animi et et voluptate. Iure sit quam tempore sit. Facilis qui ipsum quo iste quasi.', 1, 1, 'course-3.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(17, 8, 'Odit dolor et reprehenderit.', 'sed-nulla', 'Ipsam architecto tenetur nisi necessitatibus quas modi. Molestiae sit quaerat quidem nemo. Qui qui molestiae quis sit maxime. In optio et nemo maiores.', 1, 1, 'course-3.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(18, 2, 'Quo est quis dolores.', 'dolor-sed-quam', 'Est molestiae id cumque autem aliquid libero doloremque. Placeat odit saepe consequuntur neque ipsam ut rem magnam. Eos omnis ab nam sit rerum molestias occaecati accusamus. Explicabo rerum cum reprehenderit maiores repellat.', 1, 1, 'course-4.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(19, 9, 'Blanditiis facere perferendis vel.', 'veritatis-minus', 'Rerum at et quis aliquam eaque. Corrupti similique enim consequuntur consequatur. Iusto ut rem placeat ad magni. Fugiat delectus praesentium voluptas maxime voluptate ipsam eius.', 1, 1, 'course-6.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(20, 4, 'Consequuntur nisi.', 'beatae-iusto-ducimus', 'Omnis quidem magni rerum aut inventore. Aspernatur maxime occaecati et quisquam. Ipsa molestiae ducimus voluptas dolorem.', 1, 1, 'course-6.jpg', NULL, 1, '2024-02-13 04:27:34', '2024-02-13 04:27:34'),
(21, 3, 'Perferendis officiis suscipit culpa.', 'voluptas-provident', 'Qui alias at ea sed harum accusantium. Reprehenderit ut totam sit ex blanditiis harum ullam. Asperiores labore aut sed quibusdam voluptatem molestias. Minus perferendis quas nesciunt voluptas.', 1, 1, 'course-6.jpg', NULL, 1, '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(22, 3, 'Culpa voluptatem unde quo.', 'consequatur-cumque', 'Numquam aut voluptatibus dolores consequatur voluptas quae. Ea vel ut assumenda amet quo possimus velit. Placeat a molestias illo doloremque quo et minima et.', 1, 1, 'course-5.jpg', NULL, 1, '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(23, 2, 'Ut esse sint.', 'sit-magnam', 'Ab placeat odio non aut. Voluptatum pariatur eligendi sed ut facilis aut ut labore. Et odit eligendi et doloribus nobis.', 1, 1, 'course-1.jpg', NULL, 1, '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(24, 4, 'Delectus adipisci et et nemo.', 'animi-excepturi-molestiae', 'Repellendus modi illo tenetur nisi nobis. Architecto nostrum sed eius dicta illo. Est vitae iste culpa itaque modi quibusdam. Eveniet consequuntur perspiciatis sed ullam fuga dicta.', 1, 1, 'course-2.jpg', NULL, 1, '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(25, 3, 'Placeat qui perspiciatis minus.', 'occaecati-quia-ea', 'Atque veritatis qui aut provident. Atque dignissimos dolor at eveniet consequatur. Vel natus eum voluptas accusantium.', 1, 1, 'course-3.jpg', NULL, 1, '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(26, 7, 'Odit ipsam.', 'quos-hic-iste', 'Sed veniam vero qui eligendi hic et ea. Asperiores magnam libero totam voluptatem corrupti ut et. Est voluptatum sequi fugit perferendis. Et sunt repellendus blanditiis reprehenderit.', 1, 1, 'course-1.jpg', NULL, 1, '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(27, 9, 'Perspiciatis mollitia dicta nulla.', 'deserunt-dolorum-sint', 'Dicta nihil id vel ipsam qui. Aut neque voluptas et vel. Ut enim quibusdam soluta voluptatem ut. Dolorem et qui atque nobis quaerat.', 1, 1, 'course-1.jpg', NULL, 1, '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(28, 4, 'Totam ipsum rerum officia.', 'et-aut-reiciendis', 'Velit iste numquam rerum quisquam iure magnam. Commodi dolorem voluptatibus doloribus id. Voluptatem maiores iure veritatis sed. Magni odio et at iusto.', 1, 1, 'course-4.jpg', NULL, 1, '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(29, 10, 'Nam aut dignissimos dolorem ad.', 'ipsa-et', 'In vitae est laudantium nobis rerum aperiam ea. Aliquam culpa adipisci nihil facilis aliquam laboriosam expedita. Omnis ea molestias commodi accusamus qui qui ducimus laboriosam. Rem rerum vero fugiat dolores animi impedit aliquam deleniti.', 1, 1, 'course-4.jpg', NULL, 1, '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(30, 10, 'Sed magni in amet voluptatem.', 'fugit-officiis-aliquam', 'Maxime consequatur non omnis temporibus. Deserunt sed iusto tempore tempora porro iusto enim. Rerum veritatis pariatur non adipisci et in ad ex. Rem in facere expedita voluptas quis nulla est.', 1, 1, 'course-3.jpg', NULL, 1, '2024-02-13 04:27:35', '2024-02-13 04:27:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course_instructors`
--

CREATE TABLE `course_instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `instructor_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `course_instructors`
--

INSERT INTO `course_instructors` (`id`, `course_id`, `instructor_id`, `created_at`, `updated_at`) VALUES
(1, 25, 7, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(2, 26, 6, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(3, 18, 4, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(4, 11, 5, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(5, 20, 1, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(6, 6, 3, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(7, 13, 2, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(8, 23, 3, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(9, 30, 5, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(10, 15, 6, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(11, 29, 5, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(12, 24, 5, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(13, 1, 4, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(14, 14, 3, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(15, 3, 2, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(16, 7, 3, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(17, 9, 7, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(18, 28, 3, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(19, 8, 2, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(20, 12, 1, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(21, 27, 1, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(22, 16, 4, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(23, 21, 5, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(24, 19, 7, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(25, 10, 8, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(26, 5, 6, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(27, 2, 2, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(28, 4, 6, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(29, 17, 8, '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(30, 22, 2, '2024-02-13 04:27:36', '2024-02-13 04:27:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE `currencies` (
  `iso` varchar(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`iso`, `created_at`, `updated_at`) VALUES
('usd', '2024-02-13 04:27:33', '2024-02-13 04:27:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `file_pdf` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documents`
--

INSERT INTO `documents` (`id`, `course_id`, `name`, `description`, `file_pdf`, `created_at`, `updated_at`) VALUES
(1, 1, 'Documento 1', NULL, '1708477635.pdf', '2024-02-21 07:07:15', '2024-02-21 07:07:15'),
(2, 21, 'doc1', 'dfasd fds', '1708530649.pdf', '2024-02-21 21:50:49', '2024-02-21 21:50:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructors`
--

CREATE TABLE `instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `twitter` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `linkedin` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instructors`
--

INSERT INTO `instructors` (`id`, `name`, `description`, `twitter`, `facebook`, `instagram`, `linkedin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Phyllis Olson', 'Accusantium recusandae sed et. Impedit dolor veritatis architecto magnam est.', 'https://twitter.com/szotto18', 'https://www.facebook.com/otto.szarata/', 'https://www.instagram.com/szotto18/', 'https://www.linkedin.com/in/ottoszarata/', 'team-4.jpg', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(2, 'Miss Verna Schmidt', 'Maxime laudantium consectetur numquam est tempora illo sunt. Numquam recusandae dicta quis similique quas quisquam repellat. Reprehenderit velit doloremque rerum deserunt ab saepe.', 'https://twitter.com/szotto18', 'https://www.facebook.com/otto.szarata/', 'https://www.instagram.com/szotto18/', 'https://www.linkedin.com/in/ottoszarata/', 'team-1.jpg', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(3, 'Adell McLaughlin', 'Illum temporibus consequatur quam unde minima. Ut perspiciatis fugiat sint voluptas voluptas. Sed minus pariatur nostrum eveniet exercitationem.', 'https://twitter.com/szotto18', 'https://www.facebook.com/otto.szarata/', 'https://www.instagram.com/szotto18/', 'https://www.linkedin.com/in/ottoszarata/', 'team-1.jpg', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(4, 'Scarlett Kilback', 'Quo velit incidunt qui tempora assumenda sunt. Optio eum quo neque assumenda consectetur similique enim sit. Itaque accusamus asperiores nemo.', 'https://twitter.com/szotto18', 'https://www.facebook.com/otto.szarata/', 'https://www.instagram.com/szotto18/', 'https://www.linkedin.com/in/ottoszarata/', 'team-2.jpg', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(5, 'Jenifer Mertz', 'Fugiat molestiae in quam corrupti et. Pariatur et impedit tempore nihil enim.', 'https://twitter.com/szotto18', 'https://www.facebook.com/otto.szarata/', 'https://www.instagram.com/szotto18/', 'https://www.linkedin.com/in/ottoszarata/', 'team-4.jpg', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(6, 'Bianka Konopelski', 'Dolores illum assumenda accusantium qui rem. Adipisci maxime placeat reiciendis aut.', 'https://twitter.com/szotto18', 'https://www.facebook.com/otto.szarata/', 'https://www.instagram.com/szotto18/', 'https://www.linkedin.com/in/ottoszarata/', 'team-3.jpg', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(7, 'Alysson Larson PhD', 'Rerum nihil quia quia rerum. Vel in et autem dolorem sit velit ut.', 'https://twitter.com/szotto18', 'https://www.facebook.com/otto.szarata/', 'https://www.instagram.com/szotto18/', 'https://www.linkedin.com/in/ottoszarata/', 'team-3.jpg', '2024-02-13 04:27:36', '2024-02-13 04:27:36'),
(8, 'Kiara Schuster', 'Et voluptas fugiat expedita. Omnis voluptates velit aliquid vero facere officiis.', 'https://twitter.com/szotto18', 'https://www.facebook.com/otto.szarata/', 'https://www.instagram.com/szotto18/', 'https://www.linkedin.com/in/ottoszarata/', 'team-3.jpg', '2024-02-13 04:27:36', '2024-02-13 04:27:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media_audios`
--

CREATE TABLE `media_audios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `audio_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media_documents`
--

CREATE TABLE `media_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `document_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `media_documents`
--

INSERT INTO `media_documents` (`id`, `user_id`, `course_id`, `document_id`) VALUES
(1, 1, 1, 1),
(2, 1, 21, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media_videos`
--

CREATE TABLE `media_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `video_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `media_videos`
--

INSERT INTO `media_videos` (`id`, `user_id`, `course_id`, `video_id`) VALUES
(1, 1, 22, 4),
(2, 1, 22, 23),
(3, 1, 26, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_13_173808_create_configs_table', 1),
(6, '2023_11_13_174020_create_category_courses_table', 1),
(7, '2023_11_13_174054_create_courses_table', 1),
(8, '2023_11_13_174123_create_videos_table', 1),
(9, '2023_11_13_174152_create_audios_table', 1),
(10, '2023_11_27_162034_create_instructors_table', 1),
(11, '2023_11_27_212813_create_course_instructors_table', 1),
(12, '2023_11_30_154720_create_currencies_table', 1),
(13, '2023_11_30_155355_create_plans_table', 1),
(14, '2023_11_30_155503_create_subscriptions_table', 1),
(15, '2023_11_30_161503_create_payment_platforms_table', 1),
(16, '2023_12_07_221437_create_media_videos_table', 1),
(17, '2023_12_11_161525_create_media_audios_table', 1),
(18, '2024_02_06_223545_create_documents_table', 1),
(19, '2024_02_07_162428_create_media_documents', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_platforms`
--

CREATE TABLE `payment_platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(191) NOT NULL,
  `subscriptions_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `payment_platforms`
--

INSERT INTO `payment_platforms` (`id`, `name`, `image`, `subscriptions_enabled`, `created_at`, `updated_at`) VALUES
(1, 'PayPal', 'img/payment-platforms/paypal.jpg', 1, '2024-02-13 04:27:33', '2024-02-13 04:27:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `duration_in_months` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plans`
--

INSERT INTO `plans` (`id`, `slug`, `price`, `duration_in_months`, `created_at`, `updated_at`) VALUES
(1, 'gratis', 0, 3, '2024-02-13 04:27:33', '2024-02-13 04:27:33'),
(2, 'mensual', 999, 1, '2024-02-13 04:27:33', '2024-02-13 04:27:33'),
(3, 'semestral', 5399, 6, '2024-02-13 04:27:33', '2024-02-13 04:27:33'),
(4, 'anual', 8999, 12, '2024-02-13 04:27:33', '2024-02-13 04:27:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active_until` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` varchar(191) DEFAULT NULL,
  `next_billing_time` datetime DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `active_until`, `user_id`, `plan_id`, `subscription_id`, `next_billing_time`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-03-31 06:00:00', 1, 1, NULL, NULL, NULL, '2024-02-13 04:29:10', '2024-02-13 04:29:10'),
(2, '2024-03-13 16:00:00', 5, 2, 'I-K2H7NM90HDD7', '2024-03-13 10:00:00', 'ACTIVE', '2024-02-14 00:12:56', '2024-02-14 00:12:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address1` varchar(191) DEFAULT NULL,
  `address2` varchar(191) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `principal` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address1`, `address2`, `country`, `state`, `city`, `zipcode`, `role_as`, `status`, `principal`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Otto Szarata', 'szystems@hotmail.com', NULL, '$2y$10$fjMKpwQ9iaWGoV6Xy4xItO/4AgfYgG.jzwgyud1CZEhBtTL5bdTwG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '2024-02-13 04:27:33', '2024-02-13 04:27:33'),
(2, 'Eduardo', 'eduardom.buro@gmail.com', NULL, '$2y$10$UEKeJGlfBfV/Q4ZQtt8qjeJx62QIFW/HL1gYpFnsWtwajcbY4vNoa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, NULL, '2024-02-13 04:27:33', '2024-02-13 04:27:33'),
(3, 'Rodolfo de Leon', 'rodolfo.buro@gmail.com', NULL, '$2y$10$wmeTSP4iDCjRkFjio5WI1eK7bK3EqW6u7X3SUgVI6yPyyP/LaMhKm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, NULL, '2024-02-13 04:27:33', '2024-02-13 04:27:33'),
(4, 'Hugo', 'Sistemas.buro@gmail.com', NULL, '$2y$10$5dgBa61bw1JLbrVBziBTvuflgm2Ccn53gHUYzyuKhJ6foTSmGeGcC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, NULL, '2024-02-13 04:27:33', '2024-02-13 04:27:33'),
(5, 'usuario', 'szotto18@hotmail.com', NULL, '$2y$10$Lz.NFFK0Mrk5PYm2bm1hoOqlEW7BE2PkcegZrSK/LpZmaiqRqh.tu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, NULL, '2024-02-14 00:12:27', '2024-02-14 00:12:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `file_video` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `course_id`, `name`, `description`, `file_video`, `created_at`, `updated_at`) VALUES
(1, 21, 'Ullam est.', 'Et assumenda quis eaque sapiente. Consequatur error et eos provident et iure. Ratione sint eius molestiae.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(2, 26, 'Aspernatur sed pariatur.', 'Iure sit non sint maiores est expedita explicabo. Earum dicta ducimus rerum in distinctio fuga reprehenderit. Accusantium labore beatae libero ducimus et ut non.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(3, 18, 'Laborum optio dolorum.', 'Quaerat ea labore fuga architecto voluptatum quis perferendis. Eius totam architecto non labore repellat pariatur. Sit voluptatem est necessitatibus qui. Doloribus qui soluta dolores aperiam.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(4, 22, 'Modi sunt.', 'Molestiae aut reprehenderit quod. Harum quia magni optio in odio sed eos. Ipsum reiciendis vel qui et expedita iste.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(5, 20, 'Inventore eum tenetur.', 'Magnam debitis architecto occaecati ut voluptatem eos iste. Atque quam nesciunt quo iusto voluptatem repellendus nisi. Ut voluptatem reprehenderit quibusdam esse magni est. Deleniti nobis voluptatem neque ut culpa qui.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(6, 27, 'Aliquid laborum.', 'Excepturi dolores voluptatem corrupti nihil rerum velit maiores. Quia fugit ipsam id. Nam dolores hic repudiandae sunt.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(7, 15, 'Mollitia maxime.', 'Et ipsum non omnis illum. Ut consequuntur et officia et odio in. Sit nulla adipisci fugiat accusantium.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(8, 13, 'Consequatur animi quibusdam.', 'Adipisci vel corrupti eveniet voluptas eligendi odio. Velit quod fugit tempora itaque sint amet. Occaecati nam quo adipisci facilis.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(9, 1, 'Et id.', 'Rerum iusto sed voluptatem enim animi ea nostrum. Quod eligendi a molestiae suscipit. Hic velit non vel incidunt minus nobis tempora.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(10, 4, 'Eligendi mollitia.', 'Aliquam aut magnam similique enim nam eveniet non. Et id sint ratione praesentium iure sit odit sint. Molestiae porro et aut consequatur sit.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(11, 23, 'Ducimus corporis.', 'Praesentium cupiditate libero nobis voluptates dolorem itaque omnis qui. Earum dicta tempora harum aliquam dolorum. Distinctio et ex magni sequi.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(12, 14, 'Ducimus provident sequi.', 'Perferendis amet mollitia neque ab veniam enim eos. Laboriosam qui laboriosam voluptatem odio. Facilis mollitia totam occaecati consequatur fugiat qui aut.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(13, 27, 'Incidunt et cupiditate.', 'Eligendi placeat rerum possimus sit delectus possimus. Maiores dolore quia tempore assumenda ducimus voluptatem quae id. Et qui soluta nisi perferendis quibusdam. Ut et consequuntur nostrum enim sed excepturi dignissimos in.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(14, 6, 'Velit harum.', 'Rerum voluptas eos distinctio ut accusamus voluptas. Ut fuga iusto et hic maxime. Quidem autem perspiciatis vitae velit.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(15, 29, 'Non expedita.', 'Consequatur vel omnis enim perferendis ea porro qui quos. Placeat earum harum alias corrupti. Rerum quia optio illo in sit. Autem rem dolorem quis magnam nihil aliquid numquam.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(16, 9, 'Et sed.', 'Ab aut qui nihil molestiae. Et qui facere labore nisi accusamus. Ipsa reprehenderit est rerum dolorem possimus.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(17, 6, 'Excepturi quidem earum.', 'Eius voluptas nam maiores rerum. Veniam laborum magni aliquam. Voluptatem cum tenetur unde occaecati aut quasi magni voluptas. Neque molestiae non ut sed maiores sed suscipit.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(18, 19, 'Sit cupiditate.', 'Autem ex occaecati architecto doloribus. Et qui qui aut blanditiis ad qui assumenda. Sint rerum impedit est aut ut.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(19, 9, 'Fugiat eligendi et.', 'Adipisci fugit architecto blanditiis. Nostrum id reiciendis fugiat ullam aut. Explicabo occaecati odio et sit. Placeat commodi dolores ea praesentium.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(20, 29, 'Quod at.', 'Laudantium rerum et atque dolor voluptatem dicta. Ut sapiente culpa deleniti esse laborum veniam neque. Ea et voluptate voluptatibus expedita voluptas.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(21, 28, 'Sed consequatur repellendus.', 'Reprehenderit sint cum et incidunt pariatur molestiae. Qui et eaque nulla qui quia. Laborum maiores qui omnis quam quo culpa blanditiis. Explicabo minima neque nihil aut.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(22, 1, 'Eos quibusdam.', 'In vel doloribus voluptatibus pariatur ea. Quia aliquid voluptate fugit. Corrupti fuga corporis qui possimus.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(23, 22, 'Nostrum impedit unde.', 'At sequi labore repudiandae nulla est maxime. Repellendus qui modi consequuntur repellat quam. Magnam molestiae deserunt et rerum beatae dolores voluptatem. Ad ipsum aut neque nihil perspiciatis laborum praesentium.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(24, 9, 'Quas illum qui.', 'Dolor eius labore omnis aspernatur est dicta facere reprehenderit. Debitis tempora quasi alias consequatur facilis. Rerum et explicabo ipsam. Commodi nisi ut ipsam sit.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(25, 13, 'Libero voluptas quis.', 'Atque dolores eum aut tempore harum. Et unde quae deserunt excepturi. Omnis et nobis quo sed quasi. Magnam quidem autem iste quas explicabo eos adipisci recusandae.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(26, 12, 'Eligendi numquam.', 'Repellat quas quia neque quia ad velit ducimus. Tempora impedit totam possimus repellendus. Exercitationem rerum quas labore nesciunt tempore nostrum.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(27, 17, 'Eos et.', 'Expedita et magnam facere. Ea voluptate quam non omnis vel soluta voluptatibus. Accusantium fugit praesentium saepe quia harum praesentium perferendis illum.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(28, 12, 'Quia ratione.', 'Ratione rerum eveniet doloribus hic qui. Nesciunt repellat dolorem recusandae quos ipsam est. Sunt rerum dolorem non non nam rerum aut. Non veniam non exercitationem omnis laboriosam maxime quas.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(29, 22, 'Explicabo ut dolore.', 'Commodi tempore esse vero nihil soluta. Sit cupiditate dolores cupiditate eum. Enim delectus illo et praesentium dolor sapiente at.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(30, 18, 'Quibusdam omnis eligendi.', 'Corrupti consequatur omnis enim eum labore cumque quae. Et atque exercitationem omnis molestiae. Qui enim accusamus tempore accusantium maxime amet.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(31, 9, 'Facere nobis.', 'Asperiores pariatur esse eum optio quam qui. Inventore ad aut deleniti et harum occaecati dignissimos. Optio voluptas asperiores blanditiis inventore optio. Quaerat ut pariatur molestiae et quaerat sint.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(32, 19, 'Dicta assumenda.', 'Natus nostrum sed modi ipsa cum asperiores aut. Soluta non saepe cum fugit sapiente eum. Impedit qui et ipsum suscipit corrupti nam excepturi quo.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(33, 3, 'Aliquid et pariatur.', 'Fuga voluptates animi eius reiciendis quae iusto quidem. Fugiat vero numquam officia iure a exercitationem. Eaque quia et quis numquam minima laudantium. Et deserunt debitis quam.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(34, 20, 'A et delectus.', 'Voluptatem ut esse non aut deserunt enim. Qui et nulla magnam occaecati porro sequi eum. Ipsa quis et modi nostrum cum ipsum dignissimos odit. Eum nihil doloremque voluptatum similique labore aliquam.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(35, 22, 'Aliquid qui.', 'Nisi aut et nihil commodi consequuntur. Soluta qui magnam et voluptatibus sequi est. Dolorem rem cumque eligendi amet alias excepturi. Voluptatem reiciendis velit eum incidunt itaque et sequi.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(36, 4, 'Ut et corrupti.', 'Ullam quo eum et itaque qui. Dolore necessitatibus quia similique qui. Maxime voluptatem ipsum qui non dolorem ea cumque. Dignissimos harum laborum quibusdam illum. Accusamus dolor facere ut iusto dolorem qui consectetur.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(37, 17, 'In asperiores earum.', 'Magni molestiae et maxime quam amet et. Aut ut officia voluptatem voluptatem non dolores suscipit. Est autem suscipit voluptatem repudiandae amet. Tempora qui in minima exercitationem sapiente et sequi. Id sunt deleniti et aut id voluptatem aut.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(38, 6, 'Explicabo exercitationem.', 'Maxime qui ut sint est nulla. Est provident est dolorem fugit expedita.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(39, 27, 'Culpa ut.', 'Odio repellendus repellendus ut nostrum tenetur cumque rerum id. Nihil recusandae debitis aut dolores. Velit consequatur magni et autem eum veritatis velit. Voluptas impedit quam sint. Rerum dolore perferendis velit et et nihil beatae.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(40, 8, 'Omnis et.', 'Sed sed non saepe perspiciatis voluptatem deserunt ut. Voluptatem qui dolor et iste accusamus repellendus. Dolorum est perferendis perspiciatis minima sit. Ab numquam sed dolorem at odio odit.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(41, 2, 'Iusto eum blanditiis.', 'Pariatur quos fugiat commodi aliquam velit est sapiente. Aut voluptates quia facilis. Deserunt omnis eos maiores excepturi odit ipsam nihil tempora.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(42, 28, 'Temporibus exercitationem laboriosam.', 'At et et ipsum ducimus. Voluptas voluptatibus molestiae iusto dicta itaque. Architecto qui consectetur nihil.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(43, 30, 'Quidem quos.', 'Ut autem enim officiis officia numquam. Officia esse quam aut accusamus ut aut similique et. Aut quia dolorum vel ut ut et enim.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(44, 27, 'Consequuntur vero reiciendis.', 'Omnis dolorem quos labore magnam commodi commodi. Sunt alias neque unde unde a. In ut modi culpa quasi.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(45, 20, 'Velit odit quos.', 'Assumenda dolorum ut quia rerum rerum. Suscipit libero deleniti aut nihil qui optio. Et molestias qui consectetur nobis labore quam perferendis.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(46, 17, 'Voluptatem quis.', 'Libero consequatur aut quidem voluptas. Et non ea nisi commodi. Officiis temporibus rerum porro ut libero.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(47, 3, 'Architecto aut.', 'Atque minima aut quia dolorem non. Dolores sit dolores corporis possimus. Sit adipisci adipisci illum tenetur.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(48, 4, 'Facilis repellendus.', 'Necessitatibus qui quam quidem voluptatem. Fugit quia quia facere autem alias qui alias. Sed soluta qui sint maiores eveniet.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(49, 15, 'Velit in et.', 'Voluptatem nam ea placeat fuga et beatae veritatis. Qui iure repellendus et voluptates non corporis doloremque. Perferendis amet vel consectetur et aliquid est nihil.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(50, 26, 'Laboriosam libero aliquid.', 'Eaque sapiente tempore sint nulla veniam aut. Distinctio possimus esse est itaque in sed voluptatum. Doloremque vero sit asperiores omnis. Consectetur soluta facere expedita possimus et quia totam. Consequatur nostrum labore voluptatum.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(51, 20, 'Voluptas ipsam.', 'Quia ullam asperiores reprehenderit qui accusamus. Est velit eius vel voluptatibus vel rerum error eos. Maxime fugiat maiores dolorem deserunt.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(52, 2, 'Dolore voluptatum illo.', 'Omnis ut consectetur omnis maiores earum voluptatem hic. Quo modi totam est corrupti quo. Occaecati est corrupti fugiat. Inventore reprehenderit voluptates unde et excepturi et deserunt.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(53, 13, 'Cumque voluptatibus et.', 'Tenetur et praesentium recusandae consequuntur consequatur animi. Maxime aut neque natus doloribus ut ipsa sint. Quos id laudantium exercitationem velit assumenda repudiandae.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(54, 7, 'Error eaque perspiciatis.', 'Quia aliquid odit modi nihil delectus. Praesentium dolorem temporibus debitis consequuntur enim. Debitis id blanditiis ea explicabo.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(55, 15, 'Voluptatem sit.', 'Inventore aut ut consequuntur ad et accusantium esse et. Dicta illo et ipsam voluptas quos est magni voluptas. Est ut eaque qui dolores qui quia nostrum.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(56, 14, 'Repudiandae sed.', 'Et modi inventore amet quod veniam. Dolorum et quasi non omnis id voluptatem facilis. Et reprehenderit provident recusandae hic aut ea magnam.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(57, 21, 'Ducimus repellat.', 'Recusandae maiores aspernatur aliquam eum. Est inventore est reprehenderit et sequi et. Veniam ipsam consectetur velit atque. Veritatis nostrum numquam aperiam eligendi dolor facilis. Omnis hic est qui accusantium sapiente.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(58, 21, 'Sapiente dolores cumque.', 'Suscipit nobis cumque dolores voluptas qui. Sit id veniam est qui autem iure quo provident. Qui exercitationem quos voluptas expedita.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(59, 19, 'Atque et similique.', 'Veritatis aut accusantium et mollitia ex cum nisi temporibus. Nobis eum incidunt quisquam quidem quaerat saepe inventore. Et adipisci sequi nihil quae delectus. Impedit quia laborum fugiat vero quis sunt.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(60, 22, 'Explicabo corporis sit.', 'Labore ipsam provident laboriosam adipisci quia qui neque. Voluptatem rerum earum iure mollitia dolorem veniam. Quia corporis explicabo voluptatem. Sit eum temporibus cum omnis quam eos accusantium facilis. Non ratione nisi optio in nihil ab dolorem.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(61, 23, 'Quia et.', 'Sequi dolorem ea quos qui minus vitae. Quae eveniet aut facilis esse vel. Eveniet labore rerum dicta unde. Et sed quis facilis veniam quibusdam qui autem et.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(62, 6, 'Assumenda voluptate.', 'Nemo voluptas aut voluptas sit. Velit fuga quam quaerat omnis qui aut dolor. Et ratione laboriosam rerum.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(63, 6, 'Eligendi voluptates.', 'Culpa ipsa odit sunt dignissimos quod. Labore dicta sit ut. Delectus impedit nisi saepe fugiat.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(64, 8, 'Quasi amet.', 'Molestiae veritatis enim et assumenda aut vero voluptatem. Et quis qui consequatur et in accusantium et. Dolorum in rerum et enim voluptatem est vel provident.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(65, 14, 'Labore qui.', 'Reiciendis dolores sit voluptas nesciunt provident sed doloribus. Voluptas et aut debitis non. Molestiae officiis accusamus expedita. Nemo quasi qui exercitationem numquam et totam rerum.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(66, 21, 'Aut corporis.', 'Laboriosam ipsam qui cupiditate minus qui. Ea molestiae aut eos ea. Sint perspiciatis sit hic quia quia odit eligendi. Dolore molestias rem reprehenderit animi officiis dolores. Et nisi neque dicta.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(67, 14, 'Suscipit maxime deleniti.', 'Iure odio sit pariatur et nostrum. Voluptatem quod quidem praesentium repellendus. Id dolorem ducimus error est. Quis et aut qui voluptatem similique similique.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(68, 29, 'Delectus eveniet.', 'Incidunt molestiae cumque nihil id cupiditate saepe sed. Omnis sed consequatur atque at officia enim voluptatibus. Esse aut est beatae.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(69, 1, 'Voluptatum eos.', 'Minima velit ut dolorem quae. Hic necessitatibus ea esse et magnam. Beatae aut nulla pariatur qui. Architecto sit rerum impedit ab nemo.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(70, 29, 'Suscipit et.', 'Vero nostrum voluptatem neque molestiae pariatur dolor. Explicabo rerum nesciunt aut. Veritatis est odio ratione harum dolorem rerum consectetur. Et debitis voluptas qui quisquam non occaecati.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(71, 19, 'Non tempora.', 'Qui vel quia quia earum assumenda culpa eius. Nemo error unde quae quis. Est qui dolorem voluptates et cupiditate atque. Earum fugiat enim eum.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(72, 15, 'Omnis beatae.', 'Quia nostrum atque ab repellat omnis. Quidem deleniti rem voluptatem sed debitis dolorum. Consequatur enim necessitatibus et rerum animi.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(73, 21, 'Facilis ut omnis.', 'Eius dolorem libero sit ea veritatis quis unde. Optio unde incidunt molestias et sint omnis molestiae. Tenetur quia rerum sit eaque et. Quam accusamus corrupti et temporibus.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(74, 18, 'Quis rerum.', 'Quis voluptas eos aut. Voluptate et tempora molestiae vero sint nihil autem. Sint aliquid dolorem qui et fuga. Autem dolor autem delectus fuga quas sint fuga.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(75, 16, 'Quia sit nesciunt.', 'Laudantium et ut voluptas id. Accusantium sed sed alias officiis. Explicabo hic ratione rerum. Consectetur et excepturi aut consequatur.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(76, 10, 'Accusamus dolorum.', 'Eum architecto quis quo ipsa voluptas nostrum ut. Nulla vitae eum iste aut. Tenetur enim sint sint eveniet porro optio ut.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(77, 5, 'Minima tenetur.', 'Officiis adipisci ullam est excepturi id. Commodi illo sed aliquid molestias in eius. Dolores distinctio ut autem ut quo ut esse. Quis nemo architecto quos voluptatem quia.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(78, 8, 'Accusantium unde exercitationem.', 'Commodi repudiandae quisquam totam error. Repellat culpa quo et facere laudantium nisi error. In iste delectus vel ab non ea.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(79, 4, 'Dolore deleniti.', 'In dolorem vitae nobis excepturi. Consequatur ut aut architecto quas. Culpa est quidem ut magni harum enim.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(80, 1, 'Et consectetur amet.', 'Aut deleniti accusamus ipsa aspernatur iusto. Est et necessitatibus repellat. Ducimus quia culpa veniam ab voluptate tenetur.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(81, 13, 'Aut hic aliquid.', 'Omnis unde voluptates dignissimos quia sit. Nesciunt sapiente neque dolor facilis vitae rerum. Cupiditate illo est id sed. Quae labore dolor eveniet voluptatibus alias.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(82, 21, 'Aut vel eos.', 'Inventore distinctio est eaque non laudantium veniam. Repellendus eveniet quisquam qui optio magni officiis. Eos hic et odit facilis dolor et voluptatem. Consequatur repellat voluptas rerum quos culpa asperiores necessitatibus similique.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(83, 2, 'Quas mollitia voluptas.', 'Tempore autem ut vero. Repellat tempore dicta corporis sit qui. Mollitia libero id qui libero saepe quibusdam. Quis hic aut enim enim voluptatum culpa recusandae. Nisi iure illo non dolor porro eos aut.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(84, 10, 'Facilis laborum eaque.', 'Earum explicabo occaecati rem recusandae recusandae illo sequi. Voluptate commodi sed est animi esse voluptas culpa. Et voluptas voluptas consequatur qui dolores. Ex eum est eos molestiae sapiente.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(85, 23, 'Quo commodi repellat.', 'Ut nulla tempore repudiandae sed quas autem dolor. Iure neque animi enim mollitia rem libero. Asperiores impedit delectus quam consequatur doloribus adipisci repellat eos.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(86, 21, 'Incidunt ex omnis.', 'Iste et aut est aut fuga suscipit fugiat. Exercitationem qui numquam aut voluptatibus quis dignissimos quia. Repellendus iure eum autem nostrum ut dolorem. Consequatur quia aut labore odio.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(87, 12, 'Labore ut ea.', 'Quasi at libero quis officiis perferendis et et saepe. Ipsam ullam distinctio ad. Sit cum aspernatur quia inventore omnis cumque.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(88, 27, 'Itaque molestiae.', 'Rerum repellat velit modi ad est nesciunt. Fuga dolor non harum corporis sed illum. Incidunt odit expedita quas est. Dolorem unde assumenda unde id cupiditate eaque.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(89, 3, 'Ipsam provident itaque.', 'Et non et quia facere. Voluptatem voluptas reprehenderit omnis. Enim vitae aut illum dignissimos perferendis voluptatem vitae. Quia quos neque vel quia.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(90, 13, 'Omnis mollitia ipsam.', 'Consectetur voluptatibus qui vitae doloremque. Dolor doloribus sint eaque sit fuga itaque repellat. Optio recusandae sint ut nobis qui eos.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(91, 12, 'Explicabo provident.', 'Numquam libero ut iusto ullam dolore. Debitis alias laboriosam dolores aut eum sequi quia. Maiores dolor rerum qui quidem facere.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(92, 13, 'Eos ipsam reprehenderit.', 'Nostrum aut expedita dicta magnam voluptas. Laborum distinctio commodi deleniti. Recusandae molestiae enim quis suscipit non vero.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(93, 24, 'Laudantium enim quos.', 'Voluptas fugit tempore quod quisquam perspiciatis voluptates aut nihil. Et distinctio atque neque. Commodi dolorem repellat totam qui accusamus dignissimos. Impedit quia recusandae adipisci enim.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(94, 3, 'Perspiciatis non.', 'Sint est ad minima corrupti quod numquam quod ut. Modi dolorum tempore quae ipsam atque vero. Velit aut qui expedita reiciendis autem voluptatem id. Nihil perferendis omnis earum sint molestiae voluptates.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(95, 29, 'Voluptas a quis.', 'At nihil voluptas possimus ipsum et laborum officiis. Sed laboriosam qui eligendi minus. Aperiam qui non aut dolores cum explicabo consequatur. Quia soluta aut totam dolorem.', '1.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(96, 11, 'Odit voluptatem dicta.', 'Sequi repellendus enim aut sunt reprehenderit molestias maiores ea. Est impedit ipsum aut veniam architecto occaecati ut. Ut dolores nostrum placeat in recusandae rem.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(97, 15, 'Aut adipisci.', 'Nihil et reiciendis totam. Aut modi iure animi quo sint molestias. Et quo non qui veritatis. At harum molestiae vitae qui.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(98, 20, 'Consectetur ex ut.', 'Autem vel debitis sed velit ea. Autem sed et facere nesciunt. Repellendus odit velit officia aut. Beatae sit ea aut esse fugiat dolor.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(99, 15, 'Quia quaerat.', 'Debitis nihil cumque dolorem minus esse. Ea delectus magnam quae est velit. Voluptatem minus quia laborum mollitia similique. Et ratione ut natus. Accusamus ipsam ut enim nihil.', '2.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35'),
(100, 20, 'Reiciendis ut.', 'Doloremque quo quia laborum laborum. Expedita similique aut totam. Distinctio magni voluptatibus qui sint et.', '3.mp4', '2024-02-13 04:27:35', '2024-02-13 04:27:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category_courses`
--
ALTER TABLE `category_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `course_instructors`
--
ALTER TABLE `course_instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`iso`);

--
-- Indices de la tabla `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `media_audios`
--
ALTER TABLE `media_audios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `media_documents`
--
ALTER TABLE `media_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `media_videos`
--
ALTER TABLE `media_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `payment_platforms`
--
ALTER TABLE `payment_platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plans_slug_unique` (`slug`);

--
-- Indices de la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_user_id_unique` (`user_id`),
  ADD KEY `subscriptions_plan_id_foreign` (`plan_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `audios`
--
ALTER TABLE `audios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `category_courses`
--
ALTER TABLE `category_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `course_instructors`
--
ALTER TABLE `course_instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `media_audios`
--
ALTER TABLE `media_audios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `media_documents`
--
ALTER TABLE `media_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `media_videos`
--
ALTER TABLE `media_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `payment_platforms`
--
ALTER TABLE `payment_platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`),
  ADD CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
