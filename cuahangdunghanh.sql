-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 11, 2017 lúc 06:03 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cuahangdunghanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tieuDe` text COLLATE utf8_vietnamese_ci NOT NULL,
  `noiDung` text COLLATE utf8_vietnamese_ci NOT NULL,
  `anhBaiViet` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieuDe`, `noiDung`, `anhBaiViet`) VALUES
(3, 'BÃ­ kÃ­p trá»“ng cÃ¢y chÃ¹m ngÃ¢y má»™t láº§n, Äƒn quanh nÄƒm...', '<p>Ch&ugrave;m ng&acirc;y, hay c&ograve;n gá»i l&agrave; ba Ä‘áº­u dáº¡á»‹, c&oacute; xuáº¥t xá»© tá»« v&ugrave;ng Nam &Aacute; v&agrave; Ä‘Æ°á»£c trá»“ng nhiá»u á»Ÿ cáº£ ch&acirc;u &Aacute; v&agrave; ch&acirc;u Phi vá»›i lá»‹ch sá»­ hÆ¡n 4 ng&agrave;n nÄƒm. Trong tiáº¿ng Anh, c&acirc;y ch&ugrave;m ng&acirc;y c&ograve;n nhiá»u t&ecirc;n gá»i kh&aacute;c nhau v&igrave; gi&aacute; trá»‹ dinh dÆ°á»¡ng cao cá»§a n&oacute; nhÆ° &quot;c&acirc;y tháº§n diá»‡u&quot;, &quot;c&acirc;y ká»³ quan&quot;, &quot;c&acirc;y váº¡n nÄƒng&quot;... Ká»¹ thuáº­t trá»“ng c&acirc;y ch&ugrave;m ng&acirc;y ráº¥t dá»… gi&uacute;p cung cáº¥p loáº¡i rau gi&agrave;u dinh dÆ°á»¡ng cho cáº£ gia Ä‘&igrave;nh.</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"/ckfinder/userfiles/images/chumngay.JPG\" style=\"height:412px; width:550px\" /></p>\n\n<p><strong>Ng&acirc;m háº¡t giá»‘ng&nbsp;</strong></p>\n\n<p>Ng&acirc;m háº¡t giá»‘ng c&acirc;y ch&ugrave;m ng&acirc;y trong nÆ°á»›c áº¥m 24 giá». Sau khi ng&acirc;m háº¡t c&acirc;y ch&ugrave;m ng&acirc;y xon vá»›t ra trá»™n vá»›i c&aacute;t v&agrave; á»§ trong bao táº£i, hoáº·c rÆ¡m ráº¡ má»—i ng&agrave;y tÆ°á»›i má»™t láº§n, 3 &ndash; 6 ng&agrave;y sau háº¡t náº©y máº§m, sau Ä‘&oacute; Ä‘em háº¡t ch&ugrave;m ng&acirc;y Æ°Æ¡m v&agrave;o bao nhá»±a hoáº·c cháº­u nhá»±a chá»©a Ä‘áº¥t tÆ¡i xá»‘p c&oacute; kho&eacute;t lá»— r&uacute;t nÆ°á»›c, tÆ°á»›i nÆ°á»›c vá»«a Ä‘á»§ áº©m v&agrave; tr&aacute;nh sÅ©ng nÆ°á»›c, 3 &ndash; 5 ng&agrave;y ti&ecirc;Ìp theo c&acirc;y sáº½ nh&uacute; l&ecirc;n.</p>\n\n<p>Sau khi nh&uacute; máº§m, há»‡ thá»‘ng rá»… c&acirc;y cÅ©ng lá»›n dáº§n táº¡o Ä‘á»™ b&aacute;m gi&uacute;p c&acirc;y vá»¯ng ch&atilde;i hÆ¡n.Trong giai Ä‘oáº¡n nay n&ecirc;n Ä‘&agrave;o lá»— rá»™ng gáº¥p Ä‘&ocirc;i v&agrave; s&acirc;u gáº¥p Ä‘&ocirc;i trong cháº­u nhá»±a, má»—i lá»— Ä‘&agrave;o c&aacute;ch nhau tá»« 1,5m &ndash; 2m. Rá»“i cáº¯t Ä‘&aacute;y, ráº¡ch hai b&ecirc;n, náº¿u Ä‘Æ°á»£c x&eacute; toáº¡c láº¥y cháº­u v&agrave; bao ra khá»i lá»—, lÆ°u &yacute; kh&ocirc;ng Ä‘á»ƒ pháº¡m v&agrave;o rá»… c&aacute;i. Äá»• má»™t lá»›p Ä‘áº¥t xá»‘p trÆ°á»›c khi Ä‘áº·t cháº­u hoáº·c bao nilon xuá»‘ng, cuá»‘i c&ugrave;ng l&agrave; phá»§, n&eacute;n lá»›p Ä‘áº¥t xá»‘p xung quanh v&agrave; máº·t tr&ecirc;n, giá»¯ áº©m 2 &ndash; 3 tuáº§n c&acirc;y sáº½ sá»‘ng khoáº», Ä‘áº¿n l&uacute;c Ä‘&oacute; kh&ocirc;ng cáº§n pháº£i thÆ°á»ng xuy&ecirc;n tÆ°á»›i nÆ°á»›c ná»¯a.</p>\n\n<p><strong>ChÄƒm s&oacute;c v&agrave; thu hoáº¡ch</strong></p>\n\n<p>Giai Ä‘oáº¡n Ä‘áº§u, kh&ocirc;ng Ä‘á»ƒ gia s&uacute;c, gia cáº§m v&agrave;o khu vá»±c trá»“ng c&acirc;y v&igrave; c&acirc;y Ä‘ang non, má»m dá»… bá»‹ g&atilde;y v&agrave; dáº­m Ä‘áº¡p hÆ° c&acirc;y. Háº±ng nÄƒm c&oacute; káº¿ hoáº¡ch l&agrave;m cá», xá»›i vun gá»‘c v&agrave; b&oacute;n ph&acirc;n vi sinh, há»¯u cÆ¡ cho c&acirc;y.</p>\n\n<p>Thu hoáº¡ch l&aacute;: C&acirc;y 3 th&aacute;ng tuá»•i Ä‘&atilde; báº¯t Ä‘áº§u cho thu hoáº¡ch, c&acirc;y cao 60cm báº¯t Ä‘áº§u cáº¯t ngá»n v&agrave; má»—i th&aacute;ng tiáº¿n h&agrave;nh tá»‰a c&agrave;nh th&uacute;c Ä‘áº©y c&acirc;y Ä‘&acirc;m chá»“i, chÄƒm s&oacute;c b&oacute;n ph&acirc;n, sau 6 th&aacute;ng tuá»•i, c&acirc;y cao khoáº£ng 2 m&eacute;t, l&agrave; thá»i gian báº¯t Ä‘áº§u thu hoáº¡ch ch&iacute;nh, trung b&igrave;nh c&acirc;y Ä‘&atilde; c&oacute; thá»ƒ cho 600g l&aacute; tÆ°Æ¡i /c&acirc;y /th&aacute;ng. Thu cá»§ v&agrave; quáº£: C&acirc;y 5 nÄƒm tuá»•i sáº½ c&oacute; &nbsp;thá»ƒ thu hoáº¡ch cá»§, má»—i c&acirc;y cho tá»« 3 &ndash; 10kg cá»§ lá»›n vá»›i gi&aacute; trá»‹ cao. Quáº£ gi&agrave; &nbsp;c&oacute; thá»ƒ phÆ¡i kh&ocirc; l&agrave;m giá»‘ng hoáº·c láº¥y háº¡t rang Äƒn nhÆ° láº¡c cÅ©ng ráº¥t tá»‘t.</p>\n\n<p>Ch&uacute; &yacute; khi sá»­ dá»¥ng c&acirc;y ch&ugrave;m ng&acirc;y: Máº·c d&ugrave; c&acirc;y ch&ugrave;m ng&acirc;y l&agrave; má»™t m&oacute;n Äƒn dinh dÆ°á»¡ng ráº¥t tá»‘t Ä‘áº·c biá»‡t cho phá»¥ ná»¯ má»›i sinh v&agrave; con nhá». Tuy nhi&ecirc;n khi c&oacute; thai, hormon thai ngh&eacute;n l&agrave; progesterone b&agrave;i tiáº¿t l&agrave;m má»m tá»­ cung khiáº¿n cÆ¡ tá»­ cung kh&ocirc;ng co b&oacute;p. C&ograve;n alpha-sitosterol trong rau ch&ugrave;m ng&acirc;y g&acirc;y co cÆ¡ trÆ¡n tá»­ cung v&agrave; l&agrave;m sáº©y thai. V&igrave; tháº¿ c&aacute;c nh&agrave; khoa há»c<a href=\"http://vietq.vn/khoa-hoc-cong-nghe-c6/\">&nbsp;</a>nháº¯c nhá»Ÿ &ldquo;phá»¥ ná»¯ c&oacute; thai kh&ocirc;ng Ä‘Æ°á»£c Äƒn rau ch&ugrave;m ng&acirc;y&rdquo;.</p>\n', NULL),
(5, 'Ká»¹ thuáº­t trá»“ng cÃ¢y bÆ°á»Ÿi da xanh', '<p>Hiá»‡n nay, bÆ°á»Ÿi da xanh l&agrave; loáº¡i Ä‘áº·c sáº£n ráº¥t Ä‘Æ°á»£c Æ°a chuá»™ng bá»Ÿi cháº¥t lÆ°á»£ng Ä‘á»™c Ä‘&aacute;o: vá»‹ thanh, kh&ocirc;ng háº¡t, nÆ°á»›c vá»«a pháº£i, m&uacute;i m&agrave;u há»“ng, dá»… lá»™t.</p>\n\n<h3><strong>Chuáº©n bá»‹</strong></h3>\n\n<p><strong>Giá»‘ng:</strong>&nbsp;Chá»‰ n&ecirc;n chá»n má»™t loáº¡i giá»‘ng duy nháº¥t l&agrave; bÆ°á»Ÿi da xanh, kh&ocirc;ng trá»“ng xen vá»›i c&aacute;c loáº¡i c&acirc;y c&oacute; m&uacute;i kh&aacute;c Ä‘á»ƒ tr&aacute;nh thá»¥ pháº¥n ch&eacute;o. N&ecirc;n trá»“ng c&acirc;y bÆ°á»Ÿi chiáº¿t, v&igrave; rá»… Äƒn ngang tr&aacute;nh gáº·p táº§ng sinh ph&egrave;n; mau ra tr&aacute;i, báº£o Ä‘áº£m cháº¥t lÆ°á»£ng giá»‘ng há»‡t c&acirc;y máº¹. C&acirc;y bÆ°á»Ÿi chiáº¿t c&oacute; tuá»•i thá» kh&aacute; cao.</p>\n\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/buoidaxanh.jpg\" style=\"float:left; height:336px; width:500px\" /></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Äáº¥t:</strong>&nbsp;Cáº£i táº¡o Ä‘á»‹a h&igrave;nh tÆ°Æ¡ng Ä‘á»‘i báº±ng pháº³ng, hÆ¡i cao á»Ÿ giá»¯a Ä‘á»ƒ tho&aacute;t nÆ°á»›c nhanh. Cáº§n ph&acirc;n t&iacute;ch cháº¥t Ä‘áº¥t Ä‘á»ƒ c&oacute; cháº¿ Ä‘á»™ b&oacute;n ph&acirc;n ph&ugrave; há»£p, c&acirc;n Ä‘á»‘i. NÆ¡i n&agrave;o Ä‘áº¥t trÅ©ng, tháº¥p, thÆ°á»ng bá»‹ ngáº­p &uacute;ng v&agrave;o m&ugrave;a mÆ°a th&igrave; Ä‘áº¯p m&ocirc; cao l&ecirc;n 20 &ndash; 30 cm so vá»›i má»±c nÆ°á»›c mÆ°a v&agrave; triá»u cÆ°á»ng.<br />\nNÆ¡i n&agrave;o Ä‘áº¥t cao th&igrave; Ä‘&agrave;o há»‘. Há»‘ trá»“ng Ä‘&agrave;o tr&ograve;n hoáº·c vu&ocirc;ng 1,2m x 1,2m, s&acirc;u 30 cm. Ä&agrave;o s&acirc;u qu&aacute; gáº·p táº§ng sinh ph&egrave;n, c&acirc;y bÆ°á»Ÿi kh&oacute; sá»‘ng. Má»—i há»‘ trá»“ng ráº£i 5 &ndash; 6 kg v&ocirc;i bá»™t, 2 bao ph&acirc;n chuá»“ng Ä‘&atilde; hoai trá»™n th&ecirc;m tro tráº¥u, xÆ¡ dá»«a, rÆ¡m ráº¡ má»¥c v&agrave; phá»§ l&ecirc;n má»™t lá»›p Ä‘áº¥t má»ng trÆ°á»›c khi trá»“ng.</p>\n\n<p><strong>Trá»“ng v&agrave; chÄƒm s&oacute;c</strong><br />\n<strong>Máº­t Ä‘á»™:</strong>&nbsp;Má»—i ha trá»“ng khoáº£ng 500 &ndash; 600 c&acirc;y. C&acirc;y c&aacute;ch c&acirc;y 4m; h&agrave;ng c&aacute;ch h&agrave;ng 4m. Äáº·t c&acirc;y bÆ°á»Ÿi giá»‘ng v&agrave;o giá»¯a há»‘, láº¥p Ä‘áº¥t phá»§ k&iacute;n gá»‘c, hÆ¡i l&otilde;m á»Ÿ giá»¯a Ä‘á»ƒ sau n&agrave;y b&oacute;n th&ecirc;m ph&acirc;n há»¯u cÆ¡ v&agrave; tiáº¿t kiá»‡m nÆ°á»›c tÆ°á»›i, phá»§ quanh gá»‘c c&aacute;c loáº¡i ph&acirc;n xanh, rÆ¡m ráº¡ cho m&aacute;t gá»‘c.<br />\nThá»i Ä‘iá»ƒm trá»“ng: tá»‘t nháº¥t l&agrave; cuá»‘i m&ugrave;a kh&ocirc;, Ä‘áº§u m&ugrave;a mÆ°a. Qua m&ugrave;a mÆ°a c&acirc;y bÆ°á»Ÿi ph&aacute;t triá»ƒn kh&aacute; tá»‘t nhá» nguá»“n nÆ°á»›c trá»i. Láº·t bá» táº¥t cáº£ tr&aacute;i non trong nÄƒm Ä‘áº§u, nÄƒm thá»© hai c&oacute; thá»ƒ chá»«a má»—i c&acirc;y 1 tr&aacute;i, nÄƒm thá»© ba giá»¯ tr&aacute;i vá»«a pháº£i; sá»‘ tr&aacute;i giá»¯ láº¡i, tÄƒng dáº§n v&agrave;o nhá»¯ng nÄƒm sau.</p>\n\n<p><strong>ChÄƒm s&oacute;c c&acirc;y sau khi trá»“ng</strong><br />\nThÆ°á»ng xuy&ecirc;n giá»¯ áº©m cho c&acirc;y. TÆ°á»›i ph&acirc;n b&oacute;n l&aacute; Lay-O,Combi-5,komix&hellip;v&agrave; b&oacute;n Ä‘á»‹nh ká»³ thÆ°á»ng xuy&ecirc;n 1-2 láº§n/th&aacute;ng. Cáº¯t tá»‰a táº¡o t&aacute;n 50cm Ä‘á»ƒ c&agrave;nh cáº¥p I, 30cm Ä‘á»ƒ c&agrave;nh cáº¥p II v&agrave; 20cm Ä‘á»ƒ c&agrave;nh cáº¥p III. Táº¡o cho c&acirc;y c&oacute; bá»™ khung c&agrave;nh , t&aacute;n rá»™ng tá»‘t cho quang há»£p.</p>\n\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/buoidaxanh2.jpg\" style=\"height:360px; width:480px\" /></p>\n\n<p><em>ThÆ°á»ng xuy&ecirc;n chÄƒm s&oacute;c, b&oacute;n ph&acirc;n sáº½ cho quáº£ cÄƒng má»ng, sai quáº£</em></p>\n\n<p>B&oacute;n cho c&acirc;y chÆ°a c&oacute; quáº£, trÆ°á»›c má»—i Ä‘á»£t lá»™c b&oacute;n má»™t láº§n thÆ°á»ng nÄƒm c&oacute; 3 Ä‘á»£t lá»™c v&agrave;o m&ugrave;a xu&acirc;n, háº¡, thu. Khi c&acirc;y c&oacute; quáº£: b&oacute;n 4 Ä‘á»£t/ nÄƒm. Thá»i ká»³ sau thu hoáº¡ch quáº£, b&oacute;n ph&acirc;n há»¯u cÆ¡ + l&acirc;n 100%, Ä‘áº¡m 20% v&ocirc;i 100%. Thá»i ká»³ chuáº©n bá»‹ ra hoa b&oacute;n Ä‘áº¡m, ka li,ZinC. Thá»i ká»³ háº¡n cháº¿ dá»¥ng quáº£ gi&uacute;p quáº£ lá»›n nhanh b&oacute;n Ä‘áº¡m, kali, boron. Thá»i ká»³ trÆ°á»›c thu hoáº¡ch 1 th&aacute;ng b&oacute;n kali,sungar.<br />\n<strong>Ph&ograve;ng chá»‘ng s&acirc;u bá»‡nh</strong><br />\nS&acirc;u váº½ b&ugrave;a: ph&aacute; hoáº¡i máº¡nh á»Ÿ thá»i ká»³ c&acirc;y c&ograve;n nhá», ch&uacute;ng g&acirc;y háº¡i tr&ecirc;n l&aacute; non, c&agrave;nh non, táº¡o váº¿t thÆ°Æ¡ng cho c&acirc;y, bá»‡nh lo&eacute;t x&acirc;m nháº­p v&agrave; ph&aacute;t triá»ƒn, thá»i gian g&acirc;y háº¡i chá»§ yáº¿u tá»« th&aacute;ng 3 Ä‘áº¿n th&aacute;ng 11 trong nÄƒm. Ph&ograve;ng trá»«: d&ugrave;ng thuá»‘c Polytin 0.2%, slrespa 0.2%. S&acirc;u Ä‘á»¥c th&acirc;n c&agrave;nh: d&ugrave;ng thuá»‘c O fatox 0.1%, Symi sidin 0.2% phun v&agrave; bÆ¡m v&agrave;o lá»— s&acirc;u Ä‘á»¥c. Ph&ograve;ng trá»«: Vá»‡ sinh vÆ°á»n, qu&eacute;t v&ocirc;i gá»‘c, báº¯t diá»‡t x&eacute;n t&oacute;c.<br />\nBá»‡nh th&aacute;n thÆ°: ThÆ°á»ng xuy&ecirc;n thÄƒm vÆ°á»n, ph&aacute;t hiá»‡n bá»‡nh sá»›m sá»­ dá»¥ng má»™t trong c&aacute;c loáº¡i thuá»‘c sau (phun khi bá»‡nh má»›i chá»›m): Mancozeb 80WP, Daconil 75WP, Antracol 70WP,&hellip; Bá»‡nh lo&eacute;t l&aacute; v&agrave; bá»‡nh sáº¹o: g&acirc;y háº¡i tr&ecirc;n c&agrave;nh, l&aacute;, quáº£: d&ugrave;ng Boocdo. Bá»‡nh cháº£y g&ocirc;m: d&ugrave;ng Boocdo, Benlat , Alliette.<br />\n<strong>K&iacute;ch th&iacute;ch ra hoa, Ä‘áº­u tr&aacute;i</strong><br />\nBÆ°á»Ÿi da xanh ra hoa, tr&aacute;i quanh nÄƒm. Do Ä‘&oacute; Ä‘á»ƒ c&oacute; nhiá»u sáº£n pháº©m Ä‘Æ°a ra thá»‹ trÆ°á»ng v&agrave;o thá»i Ä‘iá»ƒm gi&aacute; cáº£ c&oacute; lá»£i cho ngÆ°á»i sáº£n xuáº¥t, n&ecirc;n k&iacute;ch th&iacute;ch ra hoa, Ä‘áº­u tr&aacute;i tá»« 7 Ä‘áº¿n 8 th&aacute;ng trÆ°á»›c ng&agrave;y thu hoáº¡ch, nhÆ°ng náº¿u lÆ°u tr&aacute;i nhiá»u qu&aacute; sáº½ l&agrave;m suy c&acirc;y.<br />\n<strong>Thu hoáº¡ch</strong><br />\nN&ecirc;n thu hoáº¡ch khi bÆ°á»Ÿi vá»«a ch&iacute;n tá»›i, da cÄƒng l&aacute;ng, cáº¯t lu&ocirc;n cáº£ cuá»‘n tr&aacute;i. Kh&ocirc;ng h&aacute;i tr&aacute;i khi chÆ°a ch&iacute;n tá»›i hoáº·c h&aacute;i qu&aacute; trá»…, cháº¥t lÆ°á»£ng kh&ocirc;ng tá»‘t. BÆ°á»Ÿi da xanh dá»… trá»“ng, hiá»‡u quáº£ kinh táº¿ kh&aacute; cao, thá»‹ trÆ°á»ng Æ°a chuá»™ng l&agrave; loáº¡i c&acirc;y trá»“ng ph&ugrave; há»£p vá»›i Ä‘á»‹nh hÆ°á»›ng n&ocirc;ng nghiá»‡p á»Ÿ nhiá»u nÆ¡i...</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', NULL),
(6, 'Cá»§ riá»ng Ä‘iá»u trá»‹ viÃªm khá»›p, tháº¥p khá»›p', '<p><em><strong>Riá»ng chá»©a c&aacute;c hoáº¡t cháº¥t mang Ä‘áº·c t&iacute;nh kh&aacute;ng vi&ecirc;m n&ecirc;n ráº¥t c&oacute; &iacute;ch trong viá»‡c Ä‘iá»u trá»‹ vi&ecirc;m khá»›p, tháº¥p khá»›p, phong tháº¥p, Ä‘au cÆ¡ báº¯p v&agrave; gi&uacute;p váº¿t thÆ°Æ¡ng mau l&agrave;nh m&agrave; &iacute;t Ä‘á»ƒ láº¡i sáº¹o.</strong></em></p>\n\n<p><em><strong><img alt=\"\" src=\"/ckfinder/userfiles/images/curieng.jpg\" style=\"height:388px; width:665px\" /></strong></em></p>\n\n<p>Riá»ng c&oacute; t&ecirc;n l&agrave; phong khÆ°Æ¡ng, cao lÆ°Æ¡ng khÆ°Æ¡ng, tiá»ƒu lÆ°Æ¡ng khÆ°Æ¡ng. C&aacute;i t&ecirc;n cao lÆ°Æ¡ng khÆ°Æ¡ng c&oacute; nghÄ©a l&agrave; gá»«ng (KhÆ°Æ¡ng) má»c á»Ÿ Ä‘áº¥t Cao LÆ°Æ¡ng m&agrave; th&agrave;nh t&ecirc;n. CÅ©ng c&oacute; ngÆ°á»i cho ráº±ng, t&ecirc;n cá»§a n&oacute; xuáº¥t xá»© tá»« tiáº¿ng áº¢ Ráº­p sau Ä‘&oacute; Ä‘Æ°á»£c Ä‘á»•i t&ecirc;n th&agrave;nh riá»ng, c&oacute; nghÄ©a l&agrave; gá»«ng cay nháº¹ v&agrave; Ä‘Æ°á»£c sá»­ dá»¥ng rá»™ng r&atilde;i cho Ä‘áº¿n ng&agrave;y nay.</p>\n\n<p>Riá»ng c&oacute; vá»‹ cay, m&ugrave;i thÆ¡m, t&iacute;nh áº©m v&agrave;o hai kinh Tá»³ v&agrave; Vá»‹, c&oacute; t&aacute;c dá»¥ng &ocirc;n trung, giáº£m Ä‘au, ti&ecirc;u h&oacute;a thá»©c Äƒn. Riá»ng táº©m rÆ°á»£u, sáº¥y kh&ocirc;, rá»“i t&aacute;n nhá» v&agrave; trá»™n Ä‘á»u uá»‘ng chá»¯a Ä‘au dáº¡ d&agrave;y, nháº¥t l&agrave; khi bá»‡nh Ä‘&atilde; th&agrave;nh máº¡n t&iacute;nh. Cá»§ riá»ng gi&agrave;,&nbsp;<a href=\"http://giongcaytrong.org/giong-cay-chuoi/\">chuá»‘i xanh</a>&nbsp;v&agrave; má»™t &iacute;t v&ocirc;i bá»™t cÅ©ng l&agrave; b&agrave;i thuá»‘c trá»‹ háº¯c l&agrave;o c&ocirc;ng hiá»‡u. Khi káº¿t há»£p vá»›i má»™t sá»‘ tháº£o má»™c kh&aacute;c nhÆ°: tráº§n b&igrave;, sa nh&acirc;n, Ä‘áº¡i t&aacute;o, quáº¿, ná»¥ sim, thanh b&igrave;, bá»™t tháº£o quáº£&hellip; cÅ©ng l&agrave; nhá»¯ng b&agrave;i thuá»‘c phá»• biáº¿n trong d&acirc;n gian.</p>\n\n<p>Th&agrave;nh pháº§n h&oacute;a há»c cá»§a riá»ng c&oacute; khoáº£ng 1% tinh dáº§u, c&oacute; m&ugrave;i thÆ¡m long n&atilde;o, chá»§ yáº¿u c&oacute; xineola v&agrave; metylxinnamat. á»ž dáº¡ng tÆ°Æ¡i sá»‘ng, riá»ng c&oacute; m&ugrave;i hÆ°Æ¡ng gáº§n giá»‘ng nhÆ° gá»«ng, nhÆ°ng kh&ocirc;ng cay ná»“ng nhÆ° gá»«ng. Riá»ng l&agrave; vá»‹ thuá»‘c phá»• biáº¿n thÆ°á»ng d&ugrave;ng trong d&acirc;n gian, sau khi Ä‘&atilde; loáº¡i bá» pháº§n rá»…, l&aacute;, th&acirc;n cá»§a c&acirc;y th&igrave; Ä‘Æ°á»£c rá»­a sáº¡ch, cáº¯t l&aacute;t phÆ¡i kh&ocirc;.</p>\n\n<p>Má»™t sá»‘ nÆ¡i, ngÆ°á»i ta d&ugrave;ng rá»… phÆ¡i kh&ocirc; l&agrave;m thuá»‘c theo c&aacute;ch Ä‘&agrave;o rá»…, rá»­a sáº¡ch Ä‘áº¥t, cáº¯t bá» rá»… con rá»“i cáº¯t th&agrave;nh tá»«ng Ä‘oáº¡n 2 - 3cm Ä‘em phÆ¡i kh&ocirc;. Há»—n há»£p riá»ng v&agrave; nÆ°á»›c l&aacute;&nbsp;<a href=\"http://giongcaytrong.org/giong-cay-chanh/\">chanh</a>&nbsp;Ä‘Æ°á»£c d&acirc;n ta d&ugrave;ng nhÆ° thuá»‘c bá»•. Riá»ng l&agrave; nguá»“n cung cáº¥p dá»“i d&agrave;o c&aacute;c cháº¥t natri, sáº¯t, cháº¥t xÆ¡, vitamin A, C v&agrave; flavanoid...</p>\n\n<p>Riá»ng chá»©a c&aacute;c hoáº¡t cháº¥t mang Ä‘áº·c t&iacute;nh kh&aacute;ng vi&ecirc;m n&ecirc;n ráº¥t c&oacute; &iacute;ch trong viá»‡c Ä‘iá»u trá»‹ vi&ecirc;m khá»›p, tháº¥p khá»›p, phong tháº¥p, Ä‘au cÆ¡ báº¯p v&agrave; gi&uacute;p váº¿t thÆ°Æ¡ng mau l&agrave;nh m&agrave; &iacute;t Ä‘á»ƒ láº¡i sáº¹o. B&ecirc;n cáº¡nh Ä‘&oacute;, n&oacute; cÅ©ng c&ograve;n c&oacute; kháº£ nÄƒng Ä‘iá»u trá»‹ chá»©ng kh&oacute; ti&ecirc;u, gi&uacute;p l&agrave;m giáº£m kh&oacute; chá»‹u g&acirc;y ra do vi&ecirc;m lo&eacute;t dáº¡ d&agrave;y. Riá»ng c&ograve;n chá»©a nhiá»u cháº¥t chá»‘ng oxy h&oacute;a gi&uacute;p giáº£m thiá»ƒu c&aacute;c t&aacute;c háº¡i g&acirc;y ra bá»Ÿi c&aacute;c gá»‘c tá»± do v&agrave; nhá»¯ng Ä‘á»™c tá»‘ kh&aacute;c trong cÆ¡ thá»ƒ. Tá»« Ä‘&oacute;, g&oacute;p pháº§n ph&ograve;ng ngá»«a v&agrave; Ä‘iá»u trá»‹ c&aacute;c cÄƒn bá»‡nh vá» da nhÆ°: gháº», lang ben, lá»Ÿ lo&eacute;t v&agrave; sÆ°ng vi&ecirc;m.</p>\n\n<p>Riá»ng c&oacute; t&aacute;c dá»¥ng tÄƒng cáº£m gi&aacute;c ngon miá»‡ng, Ä‘iá»u trá»‹ ho g&agrave;, Ä‘áº§y hÆ¡i, rá»‘i loáº¡n ti&ecirc;u h&oacute;a, máº­t, ruá»™t co tháº¯t v&agrave; Ä‘au tháº¯t ngá»±c, gi&uacute;p long Ä‘á»m, giáº£m Ä‘au cá»• há»ng, trá»‹ ti&ecirc;u cháº£y, háº¡ cholesterol v&agrave; triglyceride trong m&aacute;u.</p>\n\n<p>Trá»‹ vi&ecirc;m Ä‘áº¡i tr&agrave;ng thá»ƒ h&agrave;n tháº¥p: (ngÆ°á»i bá»‡nh c&oacute; biá»ƒu hiá»‡n ph&acirc;n sá»‘ng, rá»‘i loáº¡n ti&ecirc;u h&oacute;a, bá»¥ng Ä‘au &acirc;m á»‰, Äƒn uá»‘ng k&eacute;m, ch&acirc;n tay yáº¿u má»m):</p>\n\n<p>Riá»ng kh&ocirc; 16g, báº¡ch truáº­t 16g, ho&agrave;i sÆ¡n 16g, li&ecirc;n nhá»¥c 12g, sÆ¡n th&ugrave; 12g, ph&ograve;ng s&acirc;m 16g, báº¡ch linh 12g, cam tháº£o 12g, t&aacute;o táº§u 4 quáº£, tráº§n b&igrave; 10g, sinh khÆ°Æ¡ng 6g, tháº£o quáº£ 6g, ngÅ© gia b&igrave; 12g, Ä‘inh lÄƒng 16g. Ng&agrave;y 1 thang, sáº¯c 3 láº§n uá»‘ng 3 láº§n. C&ocirc;ng dá»¥ng: bá»• tá»³ dÆ°Æ¡ng, chá»‘ng vi&ecirc;m trá»« tháº¥p, tÄƒng cÆ°á»ng chá»©c nÄƒng váº­n h&oacute;a cá»§a tá»³ thá»•.</p>\n\n<p>Trá»‹ Ä‘au bá»¥ng ti&ecirc;u cháº£y: Riá»ng tÆ°Æ¡i rá»­a sáº¡ch th&aacute;i l&aacute;t 20g, l&aacute; lá»‘t 20g. Cho hai thá»© v&agrave;o áº¥m chuy&ecirc;n, h&atilde;m nÆ°á»›c s&ocirc;i. Sau 20 ph&uacute;t r&oacute;t nÆ°á»›c thuá»‘c uá»‘ng dáº§n.</p>\n\n<p>- Riá»ng tÆ°Æ¡i 20g, b&uacute;p á»•i 20g, vá» quáº£ chuá»‘i xanh (sao qua) 30g. Cho c&aacute;c vá»‹ v&agrave;o áº¥m Ä‘á»• 2 b&aacute;t nÆ°á»›c, náº¥u s&ocirc;i 10 ph&uacute;t, cháº¯t ra uá»‘ng dáº§n. C&ocirc;ng dá»¥ng: &ocirc;n áº¥m tá»³ vá»‹, cáº§m ti&ecirc;u cháº£y. Riá»ng tÆ°Æ¡i 20g, l&aacute; nh&oacute;t (sao v&agrave;ng háº¡ thá»•) 20g, l&aacute; m&atilde; Ä‘á» 20g. Sáº¯c uá»‘ng 2 - 3 láº§n trong ng&agrave;y. Riá»ng tÆ°Æ¡i 20g, báº¡ch truáº­t (sao v&agrave;ng háº¡ thá»•) 16g, lá»‡ chi 20g, quáº¿ tá»‘t 8g. Sáº¯c uá»‘ng 2 - 3 láº§n trong ng&agrave;y.</p>\n', NULL),
(7, 'CÃ¡ch trá»“ng rau sáº¡ch trong thÃ¹ng xá»‘p Ä‘Æ¡n giáº£n táº¡i nhÃ .', '<p><strong>Chá»‰ vá»›i v&agrave;i bÆ°á»›c Ä‘Æ¡n giáº£n, báº¡n Ä‘&atilde; c&oacute; nhá»¯ng th&ugrave;ng xá»‘p trá»“ng c&acirc;y táº¡i nh&agrave; cho gia Ä‘&igrave;nh c&oacute; rau sáº¡ch quanh nÄƒm.</strong></p>\n\n<p>Vá»›i nhá»¯ng gia Ä‘&igrave;nh kh&ocirc;ng c&oacute; Ä‘áº¥t vÆ°á»n th&igrave; biá»‡n ph&aacute;p trá»“ng rau th&ugrave;ng xá»‘p Ä‘Æ°á»£c Æ°a chuá»™ng nháº¥t bá»Ÿi Æ°u Ä‘iá»ƒm gá»n, nháº¹, dá»… kiáº¿m, dá»… sá»­ dá»¥ng. Tuy nhi&ecirc;n kh&ocirc;ng pháº£i ai cÅ©ng biáº¿t trá»“ng c&acirc;y trong th&ugrave;ng xá»‘p Ä‘&uacute;ng c&aacute;ch. Nhá»¯ng bÆ°á»›c cÆ¡ báº£n sau sáº½ gi&uacute;p gia Ä‘&igrave;nh c&oacute; má»™t vÆ°á»n rau xanh sáº¡ch quanh nÄƒm m&agrave; kh&ocirc;ng lo tháº¥m nÆ°á»›c, báº©n thá»‰u.</p>\n\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/trongcaythungxop.jpg\" style=\"height:480px; width:640px\" /></p>\n\n<p><strong>Nguy&ecirc;n liá»‡u:</strong></p>\n\n<p>Há»™p xá»‘p, Háº¡t giá»‘ng, Äáº¥t, Ph&acirc;n há»¯u cÆ¡, Gi&aacute; thá»ƒ</p>\n\n<p>Xáº»ng, Dao, Gáº¡ch, Váº£i phá»§</p>\n\n<h3><strong>C&aacute;ch l&agrave;m:</strong></h3>\n\n<p><em>BÆ°á»›c 1: Báº¯t Ä‘áº§u</em></p>\n\n<p>Thu tháº­p táº¥t cáº£ c&aacute;c dá»¥ng cá»¥ cáº§n thiáº¿t, bao gá»“m há»™p xá»‘p.</p>\n\n<p><em>BÆ°á»›c 2: Tho&aacute;t nÆ°á»›c</em></p>\n\n<p>- D&ugrave;ng dao táº¡o 6 lá»— há»•ng vá»›i khoáº£ng c&aacute;ch Ä‘á»u nhau á»Ÿ Ä‘&aacute;y th&ugrave;ng xá»‘p. Nhá»¯ng lá»— nhá» n&agrave;y gi&uacute;p nÆ°á»›c cháº£y xuá»‘ng dÆ°á»›i - háº¡n cháº¿ &uacute;ng, ngáº­p g&acirc;y thá»‘i rá»…. LÆ°u &yacute; kh&ocirc;ng kho&eacute;t lá»— qu&aacute; lá»›n v&igrave; Ä‘áº¥t sáº½ bá»‹ tr&ocirc;i ra ngo&agrave;i.</p>\n\n<p>N&acirc;ng cao c&aacute;c th&ugrave;ng xá»‘p thay v&igrave; Ä‘á»ƒ trá»±c tiáº¿p xuá»‘ng ná»n nh&agrave;. K&ecirc; á»Ÿ má»—i g&oacute;c th&ugrave;ng xá»‘p má»™t vi&ecirc;n gáº¡ch Ä‘á»ƒ c&acirc;n báº±ng.</p>\n\n<p><em>BÆ°á»›c 3: Cho Ä‘áº¥t</em></p>\n\n<p>- á»ž dÆ°á»›i c&ugrave;ng cá»§a th&ugrave;ng xá»‘p Ä‘áº·t má»™t lá»›p gi&aacute; thá»ƒ - vá»«a dá»… tho&aacute;t nÆ°á»›c m&agrave; váº«n giá»¯ láº¡i c&aacute;c cháº¥t dinh dÆ°á»¡ng tá»‘t cho c&acirc;y.</p>\n\n<p>- Lá»›p tr&ecirc;n l&agrave; há»—n há»£p cá»§a ph&acirc;n b&oacute;n v&agrave; Ä‘áº¥t trá»“ng. Theo kinh nghiá»‡m&nbsp;cá»§a c&aacute;c chuy&ecirc;n gia th&igrave; Ä‘á»ƒ trá»“ng rau Äƒn trong nh&agrave; th&igrave; ban Ä‘áº§u n&ecirc;n trá»™n khoáº£ng 10-30% ph&acirc;n b&oacute;n l&agrave; vá»«a Ä‘á»§.</p>\n\n<p><em>BÆ°á»›c 4: Gieo háº¡t</em></p>\n\n<p>- Kh&ocirc;ng gieo qu&aacute; nhiá»u háº¡t giá»‘ng v&agrave;o má»™t th&ugrave;ng. Báº¡n c&oacute; thá»ƒ trá»“ng c&aacute;c loáº¡i rau thÆ¡m nhÆ° báº¡c h&agrave;, h&uacute;ng,...c&ugrave;ng má»™t th&ugrave;ng/ Tuy nhi&ecirc;n nhá»¯ng loáº¡i c&acirc;y nhÆ° á»›t, c&agrave; chua, dÆ°a chu&ocirc;t,...n&ecirc;n trá»“ng ri&ecirc;ng á»Ÿ c&aacute;c th&ugrave;ng kh&aacute;c nhau.</p>\n\n<p>- Sau khi gieo háº¡t, d&ugrave;ng váº£i má»ng phá»§ l&ecirc;n Ä‘á»… giá»¯ áº¥m, k&iacute;ch th&iacute;ch háº¡t náº£y máº§m nhanh.</p>\n\n<p><em>BÆ°á»›c 5: ChÄƒm s&oacute;c h&agrave;ng ng&agrave;y</em></p>\n\n<p>- Rau quáº£ trong th&ugrave;ng xá»‘p cáº§n Ä‘Æ°á»£c kiá»ƒm tra v&agrave; tÆ°á»›i nÆ°á»›c ngay khi tháº¥y máº·t Ä‘áº¥t se kh&ocirc;. V&agrave;o thá»i tiáº¿t náº¯ng n&oacute;ng c&oacute; khi 2-3 láº§n/ng&agrave;y. V&agrave;o m&ugrave;a Ä‘&ocirc;ng thÆ°á»ng 1-2 ng&agrave;y má»›i tÆ°á»›i má»™t láº§n.</p>\n\n<p>- Táº­n dá»¥ng nÆ°á»›c vo gáº¡o, nÆ°á»›c rá»­a rau, b&atilde; ch&egrave;, b&atilde; c&agrave; ph&ecirc; Ä‘á»ƒ tÆ°á»›i v&agrave; b&oacute;n c&acirc;y h&agrave;ng ng&agrave;y.</p>\n\n<p>- C&acirc;y c&ograve;n non Ä‘á»ƒ nÆ¡i c&oacute; nhiá»u s&aacute;ng nhÆ°ng kh&ocirc;ng trá»±c tiáº¿p dÆ°á»›i &aacute;nh náº¯ng máº·t trá»i.</p>\n\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/trongcaythungxop2.jpg\" style=\"height:450px; width:600px\" /></p>\n\n<h3><strong>C&aacute;ch 2</strong></h3>\n\n<p>&nbsp;</p>\n\n<h3><strong>Nguy&ecirc;n liá»‡u:</strong></h3>\n\n<p>- Th&ugrave;ng xá»‘p</p>\n\n<p>- Háº¡t giá»‘ng</p>\n\n<p>- Äáº¥t&nbsp;</p>\n\n<p>- Ph&acirc;n há»¯u cÆ¡</p>\n\n<p>- M&ugrave;n cÆ°a</p>\n\n<h3><strong>C&aacute;ch l&agrave;m:</strong></h3>\n\n<p><em>BÆ°á»›c 1:&nbsp;</em>Chuáº©n bá»‹ dá»¥ng cá»¥ trá»“ng c&acirc;y cáº§n thiáº¿t nhÆ°: th&ugrave;ng xá»‘p, bay, Ä‘áº¥t trá»“ng há»¯u cÆ¡, ph&acirc;n há»¯u cÆ¡, gáº¡ch, c&acirc;y giá»‘ng hoáº·c háº¡t giá»‘ng...</p>\n\n<p><em>BÆ°á»›c 2:</em>&nbsp;Xá»­ l&yacute; th&ugrave;ng xá»‘p báº±ng c&aacute;ch Ä‘á»¥c c&aacute;c lá»— nhá» (t&ugrave;y theo Ä‘á»™ lá»›n cá»§a th&ugrave;ng m&agrave; sá»‘ lá»— c&oacute; thá»ƒ thay Ä‘á»•i), cho Ä‘áº¥t há»¯u cÆ¡ v&agrave;o trong.</p>\n\n<p><em>BÆ°á»›c 3:</em>&nbsp;D&ugrave;ng bay táº¡o lá»— nhá» tr&ecirc;n bá» máº·t sau Ä‘&oacute; trá»“ng c&acirc;y giá»‘ng hoáº·c gieo háº¡t v&agrave; phá»§ Ä‘áº¥t l&ecirc;n bá» máº·t Ä‘á»“ng thá»i n&eacute;n nháº¹.</p>\n\n<p><em>BÆ°á»›c 4:</em>&nbsp;Phá»§ má»™t lá»›p m&ugrave;n cÆ°a má»ng l&ecirc;n tr&ecirc;n v&agrave; tÆ°á»›i má»™t &iacute;t nÆ°á»›c cho c&acirc;y.</p>\n\n<p>- Táº­n dá»¥ng nÆ°á»›c vo gáº¡o, nÆ°á»›c rá»­a rau, b&atilde; ch&egrave;, b&atilde; c&agrave; ph&ecirc; Ä‘á»ƒ tÆ°á»›i v&agrave; b&oacute;n c&acirc;y h&agrave;ng ng&agrave;y.</p>\n\n<p>- C&acirc;y c&ograve;n non Ä‘á»ƒ nÆ¡i c&oacute; nhiá»u s&aacute;ng nhÆ°ng kh&ocirc;ng trá»±c tiáº¿p dÆ°á»›i &aacute;nh náº¯ng máº·t trá»i.</p>\n\n<h3><strong>C&aacute;ch 2</strong></h3>\n\n<p>&nbsp;</p>\n\n<h3><strong>Nguy&ecirc;n liá»‡u:</strong></h3>\n\n<p>- Th&ugrave;ng xá»‘p</p>\n\n<p>- Háº¡t giá»‘ng</p>\n\n<p>- Äáº¥t&nbsp;</p>\n\n<p>- Ph&acirc;n há»¯u cÆ¡</p>\n\n<p>- M&ugrave;n cÆ°a</p>\n\n<h3><strong>C&aacute;ch l&agrave;m:</strong></h3>\n\n<p><em>BÆ°á»›c 1:&nbsp;</em>Chuáº©n bá»‹ dá»¥ng cá»¥ trá»“ng c&acirc;y cáº§n thiáº¿t nhÆ°: th&ugrave;ng xá»‘p, bay, Ä‘áº¥t trá»“ng há»¯u cÆ¡, ph&acirc;n há»¯u cÆ¡, gáº¡ch, c&acirc;y giá»‘ng hoáº·c háº¡t giá»‘ng...</p>\n\n<p><em>BÆ°á»›c 2:</em>&nbsp;Xá»­ l&yacute; th&ugrave;ng xá»‘p báº±ng c&aacute;ch Ä‘á»¥c c&aacute;c lá»— nhá» (t&ugrave;y theo Ä‘á»™ lá»›n cá»§a th&ugrave;ng m&agrave; sá»‘ lá»— c&oacute; thá»ƒ thay Ä‘á»•i), cho Ä‘áº¥t há»¯u cÆ¡ v&agrave;o trong.</p>\n\n<p><em>BÆ°á»›c 3:</em>&nbsp;D&ugrave;ng bay táº¡o lá»— nhá» tr&ecirc;n bá» máº·t sau Ä‘&oacute; trá»“ng c&acirc;y giá»‘ng hoáº·c gieo háº¡t v&agrave; phá»§ Ä‘áº¥t l&ecirc;n bá» máº·t Ä‘á»“ng thá»i n&eacute;n nháº¹.</p>\n\n<p><em>BÆ°á»›c 4:</em>&nbsp;Phá»§ má»™t lá»›p m&ugrave;n cÆ°a má»ng l&ecirc;n tr&ecirc;n v&agrave; tÆ°á»›i má»™t &iacute;t nÆ°á»›c cho c&acirc;y.</p>\n\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/trongcaythungxop3.jpg\" style=\"height:450px; width:600px\" /></p>\n\n<p><em>Ch&uacute;c c&aacute;c báº¡n th&agrave;nh c&ocirc;ng !</em></p>\n', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `stt` int(11) NOT NULL,
  `maDH` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`stt`, `maDH`, `maSP`, `soLuong`) VALUES
(13, 11, 30, 2),
(14, 11, 29, 1),
(15, 11, 1, 2),
(16, 11, 6, 1),
(21, 16, 30, 21),
(22, 17, 30, 7),
(23, 17, 31, 5),
(24, 17, 20, 3),
(25, 17, 1, 6),
(26, 17, 9, 9),
(27, 18, 4, 10),
(28, 18, 1, 2),
(29, 18, 9, 16),
(33, 20, 29, 21),
(34, 20, 4, 15),
(35, 20, 30, 16),
(36, 20, 9, 18),
(37, 20, 31, 21),
(41, 23, 4, 2),
(42, 23, 9, 2),
(43, 24, 31, 1),
(44, 24, 32, 16),
(45, 24, 30, 1),
(46, 25, 30, 16),
(47, 25, 31, 25),
(48, 25, 32, 20),
(51, 27, 31, 10),
(52, 27, 32, 20),
(53, 27, 30, 12),
(54, 27, 29, 17),
(55, 28, 31, 16),
(56, 28, 32, 17),
(57, 28, 30, 7),
(58, 28, 4, 15),
(59, 29, 30, 11),
(60, 29, 31, 15),
(61, 29, 32, 16),
(62, 30, 20, 2),
(63, 30, 1, 5),
(64, 30, 9, 1),
(65, 30, 30, 9),
(73, 32, 6, 4),
(74, 32, 26, 9),
(75, 33, 32, 3),
(76, 33, 33, 7),
(77, 33, 34, 1),
(97, 41, 2, 3),
(98, 41, 3, 7),
(99, 41, 1, 2),
(100, 42, 25, 17),
(101, 43, 5, 1),
(102, 43, 6, 1),
(103, 43, 3, 1),
(104, 44, 28, 2),
(105, 45, 2, 15),
(106, 45, 3, 17),
(107, 45, 1, 15),
(108, 46, 22, 1),
(109, 46, 23, 1),
(110, 46, 13, 2),
(111, 46, 14, 1),
(112, 46, 30, 2),
(113, 46, 31, 1),
(114, 47, 16, 1),
(115, 47, 17, 1),
(116, 48, 25, 1),
(117, 48, 27, 1),
(118, 48, 24, 2),
(119, 48, 22, 1),
(120, 48, 23, 1),
(121, 49, 12, 1),
(122, 49, 13, 1),
(123, 49, 14, 1),
(124, 50, 34, 1),
(125, 50, 22, 1),
(126, 50, 13, 1),
(127, 50, 35, 1),
(128, 51, 1, 1),
(129, 51, 3, 1),
(130, 51, 22, 1),
(131, 51, 23, 1),
(132, 51, 13, 1),
(133, 51, 14, 1),
(134, 51, 30, 1),
(135, 51, 29, 1),
(136, 52, 22, 5),
(137, 52, 3, 1),
(138, 52, 17, 1),
(139, 52, 29, 1),
(140, 53, 2, 3),
(141, 53, 3, 2),
(142, 53, 27, 3),
(143, 54, 30, 8),
(144, 54, 31, 6),
(145, 54, 35, 6),
(146, 54, 16, 1),
(147, 54, 17, 1),
(148, 54, 28, 2),
(149, 55, 8, 1),
(150, 55, 26, 1),
(151, 55, 34, 3),
(152, 55, 33, 1),
(153, 56, 23, 3),
(154, 56, 27, 2),
(155, 56, 25, 5),
(156, 57, 5, 2),
(157, 57, 6, 1),
(158, 57, 11, 1),
(159, 57, 34, 2),
(160, 57, 33, 2),
(161, 58, 28, 3),
(162, 58, 22, 1),
(163, 58, 21, 7),
(164, 58, 24, 1),
(165, 58, 27, 1),
(166, 59, 25, 1),
(167, 59, 27, 1),
(168, 59, 28, 1),
(169, 59, 2, 3),
(170, 59, 22, 2),
(171, 60, 3, 10),
(172, 60, 6, 2),
(173, 60, 30, 5),
(174, 61, 17, 3),
(175, 62, 16, 1),
(176, 62, 15, 1),
(187, 69, 21, 7),
(188, 69, 22, 15),
(189, 70, 5, 2),
(190, 70, 6, 2),
(191, 70, 4, 2),
(192, 71, 17, 1),
(193, 72, 2, 3),
(194, 72, 3, 2),
(195, 72, 1, 1),
(196, 73, 15, 8),
(197, 74, 2, 1),
(198, 74, 3, 1),
(199, 74, 1, 1),
(200, 75, 2, 1),
(201, 76, 1, 2),
(202, 76, 2, 1),
(203, 76, 3, 3),
(204, 77, 38, 1),
(205, 77, 32, 1),
(206, 77, 35, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `maDH` int(11) NOT NULL,
  `maKH` int(11) NOT NULL,
  `maNV` int(11) DEFAULT NULL,
  `ngayDatHang` date NOT NULL,
  `ngayGiaoHang` date NOT NULL,
  `trangThai` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `tongThanhToan` int(11) NOT NULL,
  `cachThanhToan` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`maDH`, `maKH`, `maNV`, `ngayDatHang`, `ngayGiaoHang`, `trangThai`, `tongThanhToan`, `cachThanhToan`) VALUES
(11, 76, 18, '2017-05-11', '2017-05-14', 'HoÃ n táº¥t', 144000, NULL),
(16, 81, 16, '2017-05-15', '2017-05-18', 'Äang chuyá»ƒn hÃ ng', 546000, NULL),
(17, 82, 18, '2017-05-16', '2017-05-19', 'Äang chuyá»ƒn hÃ ng', 1582000, NULL),
(18, 83, 19, '2017-05-16', '2017-05-19', 'Äang chuyá»ƒn hÃ ng', 1030000, NULL),
(20, 85, 18, '2017-05-17', '2017-05-20', 'HoÃ n táº¥t', 5888000, NULL),
(23, 88, NULL, '2017-05-17', '2017-05-20', 'Äang chá»', 170000, NULL),
(24, 89, NULL, '2017-05-17', '2017-05-20', 'Äang chá»', 452000, NULL),
(25, 90, NULL, '2017-05-17', '2017-05-20', 'ÄÃ£ xÃ¡c nháº­n', 1566000, NULL),
(27, 92, 16, '2017-05-17', '2017-05-20', 'HoÃ n táº¥t', 1684000, NULL),
(28, 93, 19, '2017-05-18', '2017-05-21', 'HoÃ n táº¥t', 2443000, NULL),
(29, 94, 18, '2017-05-18', '2017-05-21', 'Äang chuyá»ƒn hÃ ng', 1404000, NULL),
(30, 106, 16, '2017-05-25', '2017-05-28', 'HoÃ n táº¥t', 1054000, NULL),
(32, 108, 19, '2017-05-26', '2017-05-29', 'HoÃ n táº¥t', 338000, NULL),
(33, 109, 16, '2017-05-26', '2017-05-29', 'ÄÃ£ xÃ¡c nháº­n', 295000, NULL),
(41, 75, 16, '2017-05-26', '2017-05-29', 'HoÃ n táº¥t', 124000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(42, 75, NULL, '2017-05-26', '2017-05-29', 'Äang chá»', 289000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(43, 113, NULL, '2017-05-26', '2017-05-29', 'Äang chá»', 64000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(44, 113, NULL, '2017-05-26', '2017-05-29', 'Äang chá»', 64000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(45, 114, NULL, '2017-05-27', '2017-05-30', 'Äang chá»', 461000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(46, 115, NULL, '2017-05-27', '2017-05-30', 'Äang chá»', 609000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(47, 116, 18, '2017-05-22', '2017-05-30', 'Äang chuyá»ƒn hÃ ng', 550000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(48, 117, 18, '2017-05-23', '2017-05-30', 'ÄÃ£ xÃ¡c nháº­n', 103000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(49, 118, NULL, '2017-05-24', '2017-05-30', 'Äang chá»', 580000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(50, 119, NULL, '2017-05-28', '2017-05-31', 'Äang chá»', 253000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(51, 120, 18, '2017-05-29', '2017-06-01', 'Äang chuyá»ƒn hÃ ng', 551000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(52, 121, 18, '2017-05-29', '2017-06-01', 'Äang chuyá»ƒn hÃ ng', 474000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(53, 122, NULL, '2017-05-30', '2017-06-02', 'Äang chá»', 74000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(54, 123, NULL, '2017-05-30', '2017-06-02', 'Äang chá»', 774000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(55, 124, NULL, '2017-05-30', '2017-06-02', 'Äang chá»', 606000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(56, 125, NULL, '2017-05-30', '2017-06-02', 'Äang chá»', 163000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(57, 126, NULL, '2017-05-31', '2017-06-03', 'Äang chá»', 418000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(58, 127, NULL, '2017-05-31', '2017-06-03', 'Äang chá»', 237000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(59, 128, 18, '2017-06-01', '2017-06-04', 'Äang chuyá»ƒn hÃ ng', 97000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(60, 129, 19, '2017-06-01', '2017-06-04', 'Äang chuyá»ƒn hÃ ng', 312000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(61, 130, 16, '2017-06-01', '2017-06-04', 'Äang chuyá»ƒn hÃ ng', 1050000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(62, 131, NULL, '2017-06-02', '2017-06-05', 'Äang chá»', 260000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(69, 138, 16, '2017-06-06', '2017-06-09', 'Äang chuyá»ƒn hÃ ng', 316000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(70, 139, 16, '2017-06-05', '2017-06-09', 'ÄÃ£ xÃ¡c nháº­n', 222000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(71, 140, 16, '2017-06-05', '2017-06-09', 'ÄÃ£ xÃ¡c nháº­n', 350000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(72, 141, NULL, '2017-06-06', '2017-06-09', 'Äang chá»', 44000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(73, 142, NULL, '2017-06-06', '2017-06-09', 'Äang chá»', 480000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(74, 166, NULL, '2017-06-06', '2017-06-09', 'Äang chá»', 29000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(75, 167, NULL, '2017-06-06', '2017-06-09', 'Äang chá»', 1000, 'Chuyá»ƒn khoáº£n ngÃ¢n hÃ ng'),
(76, 182, NULL, '2017-06-10', '2017-06-13', 'Äang chá»', 70000, 'Thanh toÃ¡n khi nháº­n hÃ ng'),
(77, 183, NULL, '2017-06-10', '2017-06-13', 'Äang chá»', 59000, 'Thanh toÃ¡n khi nháº­n hÃ ng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL,
  `tenKH` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `soDT` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  `diaChi` text COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `loaiKH` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `tenKH`, `soDT`, `diaChi`, `email`, `loaiKH`) VALUES
(75, 'Äáº·ng Minh TrÆ°á»ng', '0965296242', 'Quáº£ng BÃ¬nh', 'xdangminhtruongx@gmail.com', NULL),
(76, 'Nguyá»…n Thá»‹ NgÃ¢n Trang', '0962267806', 'ThÆ°á»ng TÃ­n - HÃ  Ná»™i', 'ngantrangnt894@gmail.com', NULL),
(81, 'Tráº§n VÄƒn Chung', '13213213213', 'HÃ  ná»™i', 'vachung87@gmail.com', NULL),
(82, 'Nguyá»…n Nam', '01292007778', 'KiÃªu Ká»‹ - Gia LÃ¢m', 'nguyennam@gmail.com', NULL),
(83, 'Nguyá»…n Duy Anh Tuáº¥n', '0986565477', 'KiÃªu Ká»‹ - Gia LÃ¢m - HÃ  Ná»™i', 'ndatuancntt@gmail.com', NULL),
(84, 'Nguyá»…n Minh Triáº¿t', '1651651', 'HÃ  NÃ´i ', 'minhtrietnguyen@gmail.com', NULL),
(85, 'Nguyá»…n VÄƒn Nam', '06516516', 'Cáº§u giáº¥y - HÃ  Ná»™i', 'vannam1988@gmail.com', NULL),
(86, 'Äáº·ng Há»¯u Nam', '0965223786', 'HÃ  Ná»™i', 'danghuunam80@gmail.com', NULL),
(87, 'Nguyá»…n TuÃ¢n', '1032113', 'Thanh HÃ³a', 'tuannguyen@gmail.com', NULL),
(88, 'Mark Zuckerberg', '1651651651', 'Silicon Valey', 'MarkZuckerberg@gmail.com', NULL),
(89, 'Priscilla Chan', '165198198', 'Silicon Valey', 'PriscillaChan@gmail.com', NULL),
(90, 'Äáº·ng Quá»³nh TrÃ¢m', '16565161', 'Quáº£ng minh - Quáº£ng Tráº¡ch', 'quynhtramdang@gmail.com', NULL),
(91, 'Nguyá»…n Thá»‹ Tiáº¿n', '0989778988', 'Quáº£ng Tráº¡ch - Quáº£ng BÃ¬nh', 'nttien@gmail.com', NULL),
(92, 'Tráº§n ÄÄƒng Khoa', '1651516165', 'Quáº£ng Nam', 'dangkhoa88@gmail.com', NULL),
(93, 'Tráº§n VÄƒn TÃº', '0129452511', 'NgÃ´ XuÃ¢n Quáº£ng - Gia LÃ¢m - HÃ  Ná»™i', 'vantutran@gmail.com', NULL),
(94, 'Tráº§n Quang Nháº­t', '1312327455', 'HÆ°ng YÃªn ', 'quangnhat@gmail.com', NULL),
(95, 'Julius Caesa', '6516865156', 'Roma - Italia', 'Caesa@gmail.com', NULL),
(96, 'Há»“ Nam', '215565110', 'ThÆ°á»£ng Háº£i', 'nam1990@gmail.com', NULL),
(97, 'Äáº·ng VÄƒn ThÃ¡i', '01415457999', 'Quáº£ng HÃ²a - Quáº£ng Tráº¡ch - Quáº£ng BÃ¬nh', 'dvthai@gmail.com', NULL),
(98, 'Bill Gates', '78981748', 'New York', 'billgates@gmail.com', NULL),
(99, 'Jonh Lenon', '44984982', 'Silicon valley', 'lenonst89@gmail.com', NULL),
(104, 'Nguyá»…n VÄƒn An', '0946789996', 'Gia LÃ¢m - HÃ  Ná»™i', 'anan1987@yahoo.com', NULL),
(105, 'Nguyá»…n BÃ¡ Thanh', '009788747', 'ÄÃ  Náºµng', 'nguyenbathanh@gmail.com', NULL),
(106, 'Nguyá»…n ThÃ nh Äáº¡t', '0968777623', 'Äá»“ng Há»›i - Quáº£ng BÃ¬nh', 'nguyenthanhdat@gmail.com', NULL),
(107, 'Nguyá»…n Duy Anh Tuáº¥n', '096538879', 'KiÃªu Ká»‹ - Gia lÃ¢m - HÃ  Ná»™i', 'anhtuancntt@gmail.com', 1),
(108, 'Äá»— VÄƒn Háº£i', '09087847854', 'ÄÃ´ng Anh - HÃ  Ná»™i', 'haido@gmail.com', NULL),
(109, 'Nguyá»…n VÄƒn An', '0949837958', 'HÃ  Ná»™i', 'annguyenvan@gmail.com', NULL),
(113, 'John Wick', '0965864161', 'Roma - Italia', 'johnwick@gmail.com', NULL),
(114, 'Nguyá»…n Nháº­t Ãnh', '0951651', 'Quáº£ng nam', 'nhatanh@gmail.com', NULL),
(115, 'HoÃ ng KhÃ¡nh HÆ°ng', '0945632117', 'ÄÃ  Náºµng', 'khanhhung@gmail.com', NULL),
(116, 'NgÃ¢n Trang ', '0965338715', 'ThÆ°á»ng tÃ­n - HÃ  Ná»™i', 'ngantrangnt894@gmail.com', NULL),
(117, 'Tráº§n Anh', '0126335478', 'Mai Dá»‹ch - Cáº§u Giáº¥y - HÃ  Ná»™i', 'trananh@gmail.com', NULL),
(118, 'Tráº§n Thá»‹ Loan', '0987412000', 'Thanh XuÃ¢n - HÃ  ná»™i', 'loantran@gmail.com', NULL),
(119, 'Thanh Nga', '0198111032', 'Nguyá»…n VÄƒn Cá»« - Gia LÃ¢m - HÃ  Ná»™i', 'thangnga@gmail.com', NULL),
(120, 'Nguyá»…n An', '0968887556', 'NhÆ° Quá»³nh - Gia lÃ¢m - HÃ  Ná»™i', 'nguyenan123@gmail.com', NULL),
(121, 'Nguyá»…n Äá»©c Huy', '096555234', 'Cá»­u Viá»‡t 2 - TrÃ¢u Quá»³ - Gia lÃ¢m', 'nguyenduchuy@gmail.com', NULL),
(122, 'Tráº§n VÄƒn TrÆ°á»ng', '0968776321', 'VÄƒn LÃ¢m - HÆ°ng YÃªn', 'tranvantruong@gmail.com', NULL),
(123, 'Nguyá»…n VÄƒn Linh', '01292007321', 'NhÆ° Quá»³nh - Gia LÃ¢m - HÃ  Ná»™i', 'vanlinh96@gmail.com', 1),
(124, 'Äáº·ng HÃ¹ng BÃ¡', '0965336428', 'Times City - VÄ©nh Tuy - Hai BÃ  TrÆ°ng - HÃ  NÃ´i', 'danghungba888@gmail.com', NULL),
(125, 'Nguyá»…n Thá»‹ TÃ¢m', '09686465465', 'Cá»­u Viá»‡t 1 - TrÃ¢u Quá»³ - Gia LÃ¢m', 'tamnguyen@gmail.com', NULL),
(126, 'Tráº§n Thá»‹ Lan', '0938674445', '41 An Ä‘Ã o C - TrÃ¢u Quá»³ - Gia LÃ¢m - HN', 'tranthilan@gmail.com', NULL),
(127, 'Äáº·ng Há»¯u Lam', '0128896321', '86 Thá»‹nh Quang - Äá»‘ng Äa - HN', 'namdang@gmail.com', 1),
(128, 'Nguyá»…n Viá»‡t An', '09356687555', '56 Nguyá»…n vÄƒn Cá»« - Long BiÃªn - HÃ  Ná»™i', 'nguyenvietan96@gmail.com', NULL),
(129, 'Äá»—Nháº­t Nam', '0965886773', 'TT ÄÃ´ng Anh - HÃ  Ná»™i', 'dnhatnam@gmail.com', NULL),
(130, 'Pháº¡m Thá»‹ Huá»‡', '0936875321', 'Khu Ä‘Ã´ thá»‹ SÃ i Äá»“ng - Gia LÃ¢m - HÃ  Ná»™i', 'pthue@gmail.com', 1),
(131, 'BÃ¹i danh LÆ°u', '0968321125', '32 NgÃ´ XuÃ¢n Quáº£ng - TrÃ¢u Quá»³ - Gia LÃ¢m - HN', 'danhluucntt@gmail.com', NULL),
(132, 'Tráº§n Viá»‡t ', '096296242', 'VÄƒn LÃ¢m - HÆ°ng YÃªn', 'viettran@gmail.com', NULL),
(134, 'Nguyá»…n VÄƒn ToÃ n', '0129866325', 'KiÃªu Ká»‹ - Gia LÃ¢m - HÃ  Ná»™i', 'nguyenvantoan@gmail.com', NULL),
(138, 'Phan Thá»‹ Loan', '0126335336', 'Tháº¡ch Tháº¥t - HÃ  Ná»™i', 'phanloan@gmail.com', NULL),
(139, 'Tráº§n Thá»‹ ThÃ¢n', '0965886332', 'ÄÃ´ng Anh - HÃ  Ná»™i', 'thantran1980@gmail.com', NULL),
(140, 'Nguyá»…n LÃ¢n HÃ¹ng', '0963225223', '68 Nguyá»…n VÄƒn Cá»« - Long BiÃªn - HÃ  Ná»™i', 'nguyenlanhung@gmail.com', NULL),
(141, 'Nguyá»…n Thanh Nga', '0961655245', 'Khu Ä‘Ã´ thá»‹ Äáº·ng XÃ¡', 'nguyenthanhnga@gmail.com', NULL),
(142, 'Tráº§n VÄƒn Nam', '0962256224', '11/86 - Cá»­u Viá»‡t 2 - TrÃ¢u Quá»³ - Gia lÃ¢m - HN', 'tranvannam@gmail.com', NULL),
(154, 'Nguyá»…n Thanh Äiá»n', '0968226754', 'Gia lÃ¢m - hÃ  Ná»™i', 'thanhdiennguyen@gmail.com', NULL),
(155, 'Äáº·ng NgÃ£i', '0654681', 'hÃ  Ná»™i', 'ngaidang@gmail.com', NULL),
(156, 'Nguyá»…n ÄÄƒng', '00655265', 'HÃ  Ná»™i', 'dangnguyen@gmail.com', NULL),
(161, 'Äáº·ng Minh Minh', '0965223229', 'Quáº£ng BÃ¬nh', 'truongdang@gmail.com', NULL),
(162, 'Tráº§n VÃ¢n Anh', '05546511', 'HÃ  Ná»™i', 'vananh@gmail.com', NULL),
(164, 'Tráº§n VÄƒn MÃ¹i', '06523332', 'HÃ  Ná»™i', 'muitran@gmail.com', NULL),
(165, 'Nguyá»…n Thanh Thanh', '096165655', 'HÃ  Ná»™i', 'thanhtanh@gmail.com', NULL),
(166, 'Tran Anh Tuan', '093409234', 'Ha Noi', 'anhtuan@gmail.ccom', NULL),
(167, 'Duy Anh', '9329075475', 'Gia Lam - Ha Noi', 'duyanh@gmail.com', NULL),
(168, 'Viá»‡t An', '0962565102', 'Gia lÃ¢m - HÃ  Ná»™i', 'vietan@gmail.com', NULL),
(169, 'Nguyá»…n VÄƒn ThÃ nh', '09165113135', 'Gia LÃ¢m - HN', 'vanthanh@gmail.com', NULL),
(170, 'Nguyá»…n VÄƒn NÄƒm', '0129124122', 'TrÃ¢u quá»³ - Gia lÃ¢m', 'vannam@yahoo.com', NULL),
(171, 'Nguyá»…n VÄƒn ThÃ nh CÃ´ng', '0963222511', 'Khu Ä‘Ã´ thá»‹ Äáº·ng XÃ¡', 'thanhcong@yahoo.com', NULL),
(172, 'Nguyá»…n Thanh Äiá»n', '03216513032', 'Gia lÃ¢m ', 'thanhdien@gmail.com', NULL),
(175, 'Nguyá»…n Quá»‘c Huy', '0965332116', 'HÃ  nam', 'quochuynguyen@gmail.com', NULL),
(176, 'Nguyá»…n VÄƒn CÃ´ng', '0965223886', 'Gia LÃ¢m - HÃ  Ná»™i', 'vancong@gmail.com', NULL),
(177, 'Tráº§n Thá»‹ Thanh Nga', '0965223441', 'Gia LÃ¢m - HÃ  Ná»™i', 'thanhngan86@gmail.com', NULL),
(178, 'Tráº§n Thanh Huyá»n', '0963268555', 'TrÃ¢u Quá»³', 'thanhuyen@gmail.com', NULL),
(181, 'Ãnh Nguyá»‡t', '0975229863', 'BÃ¡t TrÃ ng -  Gia LÃ¢m - HÃ  Ná»™i', 'anhnguyet1223@gmail.com', 1),
(182, 'LÃª Thá»‹ NgÃ¡t', '0965332105', '2/55 Cá»• Bi - Gia LÃ¢m - HÃ  Ná»™i', 'ngatle86@gmail.com', NULL),
(183, 'Phan VÄƒn QuÃ¢n', '0936668525', 'Äa Tá»‘n - Gia LÃ¢m - HÃ  Ná»™i', 'phanvanquan@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maLoaiSP` int(11) NOT NULL,
  `tenLoaiSP` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `ghiChu` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maLoaiSP`, `tenLoaiSP`, `ghiChu`) VALUES
(1, 'CÃ¢y Äƒn quáº£', 'Gá»“m cÃ¡c loáº¡i giá»‘ng cÃ¢y Äƒn quáº£'),
(2, 'CÃ¢y cÃ´ng trÃ¬nh', 'Gá»“m cÃ¡c loáº¡i cÃ¢y cÃ´ng trÃ¬nh.'),
(3, 'CÃ¢y lÃ¢m nghiá»‡p', 'Gá»“m cÃ¡c loáº¡i giá»‘ng cÃ¢y cung cáº¥p cho cÃ¡c há»™ trá»“ng cÃ¢y lÃ¢m nghiá»‡p.'),
(4, 'Hoa - CÃ¢y cáº£nh', 'Gá»“m cÃ¡c loáº¡i hoa, cÃ¢y cáº£nh.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` int(11) NOT NULL,
  `hoTenNV` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `diaChiNV` text COLLATE utf8_vietnamese_ci NOT NULL,
  `maTK` int(11) DEFAULT NULL,
  `ghiChuNV` text COLLATE utf8_vietnamese_ci,
  `soDienThoaiNV` varchar(15) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `hoTenNV`, `diaChiNV`, `maTK`, `ghiChuNV`, `soDienThoaiNV`) VALUES
(16, 'Äáº·ng Minh TrÆ°á»ng', 'Quáº£ng Tráº¡ch Quáº£ng bÃ¬nh', 23, 'KhÃ´ng', '096529242'),
(18, 'Nguyá»…n Duy Anh Tuáº¥n', 'KiÃªu Ká»‹ - Gia LÃ¢m - HÃ  Ná»™i', 25, 'KhÃ´ng', '09682126'),
(19, 'Äá»— VÄƒn Háº£i', 'ÄÃ´ng Anh - HÃ  ná»™i', 26, 'KhÃ´ng', '09632566874');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `soLuongSP` int(11) NOT NULL,
  `giaSP` int(11) NOT NULL,
  `maLoaiSP` int(11) NOT NULL,
  `moTaSP` text COLLATE utf8_vietnamese_ci,
  `anhSP` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `soLuongDaBan` int(11) DEFAULT '0',
  `ngayNhap` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `soLuongSP`, `giaSP`, `maLoaiSP`, `moTaSP`, `anhSP`, `soLuongDaBan`, `ngayNhap`) VALUES
(1, 'CÃ  chua bi', 745, 15000, 1, 'KhÃ´ng', 'sp1.jpg', 68, '2017-05-31 18:47:45'),
(2, 'Cam v2', 966, 1000, 1, 'KhÃ´ng', 'cay-cam-5a.jpg', 54, '2017-06-01 14:26:52'),
(3, 'Cam SÃ nh', 153, 13000, 1, 'KhÃ´ng', 'camsanh.jpg', 71, '2017-05-15 14:26:52'),
(4, 'BÆ¡ SÃ¡p', 548, 60000, 1, 'KhÃ´ng', 'bo-sap-tu-qui.jpg', 14, '2017-05-31 19:42:03'),
(5, 'Na ThÃ¡i', 229, 25000, 1, 'KhÃ´ng', 'nathai.jpg', 32, '2017-05-31 19:44:00'),
(6, 'CÃ¢y Sake', 267, 26000, 1, 'KhÃ´ng', 'sa_ke1.jpg', 50, '2017-05-17 16:02:32'),
(7, 'Chuá»‘i tiÃªu há»“ng', 560, 10000, 1, 'KhÃ´ng', 'Cay-chuoi-tieu-hong.jpg', 8, '2017-05-31 19:48:23'),
(8, 'á»”i Ä‘Ã i loan', 699, 120000, 1, 'KhÃ´ng', 'oi_2.jpg', 11, '2017-05-31 19:45:38'),
(9, 'CÃ¢y cherry', 960, 25000, 1, 'KhÃ´ng', 'caycherry.jpg', 67, '2017-05-11 18:48:37'),
(10, 'Chanh leo Ä‘Ã i loan', 400, 17000, 1, 'KhÃ´ng', 'chanhday7313.jpg', 2, '2017-05-21 19:50:48'),
(11, 'á»”I bá»‘n mÃ¹a', 900, 22000, 1, 'KhÃ´ng', 'sp4.jpg', 12, '2017-05-02 18:24:13'),
(12, 'Osaka Ä‘á»', 149, 150000, 2, 'Giáº£ giÃ¡ náº¿u mua sá»‘ lÆ°á»£ng trÃªn 20 cÃ¢y.', 'hoa-osaka-do.jpg', 4, '2017-05-16 19:55:17'),
(13, 'CÃ¢y ban tÃ­m', 325, 70000, 2, 'KhÃ´ng', 'bantim1.jpg', 11, '2017-05-15 14:26:52'),
(14, 'KÃ¨ lÃ¡ báº¡c', 567, 360000, 2, 'KhÃ´ng', 'cay-ke-bac-5a.jpg', 6, '2017-05-19 19:56:55'),
(15, 'CÃ¢y thiÃªn tuáº¿', 301, 60000, 2, 'KhÃ´ng', 'caythientue.jpg', 10, '2017-06-02 08:27:28'),
(16, 'Chuá»‘i ráº½ quáº¡t', 33, 200000, 2, 'KhÃ´ng', 'chuoirequat.jpg', 6, '2017-06-02 08:27:28'),
(17, 'CÃ¢y tÃ¹ng thÃ¡p', 693, 350000, 2, 'KhÃ´ng', 'caytunghthap.jpg', 9, '2017-04-21 16:04:34'),
(18, 'CÃ¢y bÃ¡ch tÃ¡n', 325, 150000, 2, 'KhÃ´ng', 'cay-bach-tan-2.jpg', 0, '2017-05-25 20:04:12'),
(20, 'CÃ¢y sala', 695, 360000, 2, 'KhÃ´ng', 'hoa-vo-uu.jpg', 21, '2017-05-24 20:06:45'),
(21, 'CÃ¢y táº¿ch', 693, 13000, 3, 'khÃ´ng', '1496236002.jpg', 15, '2017-05-20 20:08:51'),
(22, 'CÃ¢y Ä‘Ã n hÆ°Æ¡ng', 574, 15000, 3, 'KhÃ´ng', 'ivx1436490341.JPG', 34, '2017-05-01 10:28:45'),
(23, 'CÃ¢y sÆ°a Ä‘á»', 224, 16000, 3, 'KhÃ´ng', 'suado.jpg', 24, '2017-05-08 20:11:29'),
(24, 'TrÃ  hoa vÃ ng', 301, 20000, 3, 'KhÃ´ng', '20150405021529984.jpg', 6, '2017-05-11 20:12:27'),
(25, 'Tráº¯c Ä‘á»', 1175, 17000, 3, 'KhÃ´ng', 'tracdo.jpg', 30, '2017-05-17 10:28:45'),
(26, 'CÃ¢y cáº©m lai', 949, 26000, 1, 'KhÃ´ng', 'caycamlai3.jpg', 36, '2017-05-31 18:46:39'),
(27, 'TrÃºc liá»…u', 211, 15000, 3, 'KhÃ´ng', 'truclieu.jpg', 13, '2017-06-01 10:28:45'),
(28, 'ThÃ´ng caribe', 352, 32000, 3, 'KhÃ´ng', '1463458636_thong-caribe.jpg', 8, '2017-06-01 10:28:45'),
(29, 'Hoa Ä‘á»“ng tiá»n', 799, 36000, 4, 'BÃ¡n theo cháº­u, giÃ¡ Ä‘Ã£ bao gá»“m cáº£ cháº­u...', 'hoadongtien.jpg', 64, '2017-05-07 18:50:05'),
(30, 'Hoa há»“ng AOI', 1495, 26000, 4, 'KhÃ´ng', 'hongaoi.jpg', 27, '2017-06-01 16:02:32'),
(31, 'Hoa xÃ¡c phÃ¡o', 992, 26000, 4, 'KhÃ´ng', 'hhoaxacphao.jpg', 16, '2017-05-31 20:20:58'),
(32, 'Hoa lÆ°u ly', 207, 25000, 4, 'KhÃ´ng', 'hoaluuly.jpg', 10, '2017-05-31 20:21:41'),
(33, 'Chanh leo thÆ°á»ng', 597, 10000, 1, 'KhÃ´ng', 'cay-canh-day-1a.jpg', 14, '2017-05-31 19:51:50'),
(34, 'CÃ¢y dá»«a sÃ¡p', 191, 150000, 1, 'KhÃ´ng', 'Coconut2.jpg', 22, '2017-05-31 18:54:18'),
(35, 'Hoa lan tÃ­m', 240, 18000, 4, 'KhÃ´ng', 'hoalantim.jpg', 10, '2017-05-31 18:51:16'),
(36, 'CÃ¢y báº¡ch tráº¡ng', 300, 12000, 2, 'TÃªn thÆ°á»ng gá»i: cÃ¢y báº¡ch tráº¡ng, cÃ¢y lÃ¡ tráº¯ng', 'caybachtrang.jpg', 11, '2017-05-05 14:35:03'),
(37, 'CÃ¢y báº±ng lÄƒng', 30, 120000, 2, 'KhÃ´ng', 'banglang.jpg', 9, '2017-05-11 17:56:40'),
(38, 'Hoa tÃ³c tiÃªn', 199, 16000, 4, 'KhÃ´ng', 'toctien.jpg', 6, '2017-05-23 20:25:47'),
(50, 'CÃ¢y ngá»c lan', 600, 120000, 2, 'KhÃ´ng', 'cay-ngoc-lan-trang.jpg', 0, '2017-06-07 17:58:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tenTK` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `matKhau` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `maTK` int(11) NOT NULL,
  `loaiTK` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`tenTK`, `matKhau`, `maTK`, `loaiTK`) VALUES
('dangminhtruong', '456', 23, 0),
('ndatuancntt', '123', 25, 1),
('dovanhai', '789', 26, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `maDH` (`maDH`),
  ADD KEY `maSP` (`maSP`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`maDH`),
  ADD KEY `maKH` (`maKH`),
  ADD KEY `maNV` (`maNV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maLoaiSP`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`),
  ADD KEY `maTK` (`maTK`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSP`),
  ADD KEY `maLoaiSP` (`maLoaiSP`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `maLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `maNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`maDH`) REFERENCES `donhang` (`maDH`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`maSP`) REFERENCES `sanpham` (`maSP`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`maNV`) REFERENCES `nhanvien` (`maNV`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`maTK`) REFERENCES `taikhoan` (`maTK`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maLoaiSP`) REFERENCES `loaisanpham` (`maLoaiSP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
