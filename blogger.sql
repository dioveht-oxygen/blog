-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2018 lúc 07:40 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blogger`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `date_up` datetime DEFAULT NULL,
  `category` mediumtext COLLATE utf8mb4_unicode_ci,
  `author` mediumtext COLLATE utf8mb4_unicode_ci,
  `id_user` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`id`, `title`, `date_up`, `category`, `author`, `id_user`, `description`) VALUES
(1, 'Chuyện Con Mèo Dạy Hải Âu Bay', '2018-12-06 00:00:00', 'Truyện ngắn', 'Luis Sepúlveda', 9999, 'Có tồn tại không tình thương yêu giữa mèo và hải âu?\r\n\r\nThế giới này đầy những nghịch lý và khác biệt, nhưng bỏ qua những khác biệt đó để hướng đến tình yêu thương thì cuộc sống sẽ tốt đẹp hơn. “Chuyện con mèo dạy hải âu bay” của nhà văn Chi Lê nổi tiếng Luis SéPulveda là một câu chuyện thấm đẫm tình mèo, tình người như thế.\r\n\r\nCâu chuyện là cuộc hành trình dài đi thực hiện ba lời hứa của chú mèo mập Zorba: “sẽ không ăn quả trứng”, sẽ “chăm lo cho quả trứng đến khi chú chim non ra đời”, và điều cuối dường như không tưởng là “dạy nó bay”. Những rắc rối liên tiếp ập đến, liệu một bà má rất “xịn” như Zorba có thực hiện đúng được ba lời hứa?\r\n\r\nTình thương giúp thay đổi định kiến.\r\n\r\nMọi khó khăn đã chứng minh rằng sau thẳm bên trong chú mèo Zorba là một trái tim nhân hậu, tràn trề thứ tình cảm gọi là “yêu thương chân thành”. Chính thứ tình cảm này đã kéo cô bé chim hải âu nhỏ gần lại với mèo Zorba, bởi “Thật dễ dàng để chấp nhận và yêu thương một kẻ nào đó giống mình, nhưng để yêu thương ai đó khác mình thực sự rất khó khăn..”. Vậy đấy, yêu thương là học cách chấp nhận sự khác biệt và không có ý định muốn biến người đó trở nên giống mình. Khi chúng ta yêu thương ai đó bằng tất cả sự chân thành, thì mọi định kiến và khác biệt chỉ là điểm tựa cho tình cảm cao đẹp trong loài mèo, loài người ấy được sâu sắc hơn thôi.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `id_book` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chapter`
--

INSERT INTO `chapter` (`id`, `title`, `content`, `id_book`) VALUES
(1, 'Phần I - Chương 1 - Biển Bắc', '“Có đàn cá trích ven cảng kìa,” hải âu trinh sát thông báo, và cả đàn chim từ ngọn Hải Đăng Cát Đỏ đón nhận tin vui với những tiếng rít sung sướng vang dài.\r\nChúng đã bay liền một mạch sáu tiếng, và mặc dù những con hải âu hoa tiêu đã dò thấy luồng khí nóng có thể giúp cả đàn lướt bay thoải mái trên những con sóng, chúng vẫn cần nạp lại năng lượng – và còn gì tốt hơn là một bữa cá trích tươi ngon?\r\nChúng đang bay trên cửa sông Elber, nơi dòng nước đổ vào biển Bắc. Từ không trung, chúng thấy những con tàu lần lượt nối đuôi nhau như đàn cá voi kiên nhẫn và kỷ luật đang chờ tới lượt mình ào ra biển lớn. Khi đã ra khơi, đám tàu sẽ xác định phương hướng rồi tỏa đi tới mọi cảng biển trên khắp hành tinh.\r\nKengah, cô hải âu có bộ lông màu bạc, đặc biệt thích thú quan sát mấy lá cờ của đám tàu, vì cô biết mỗi lá cờ đại diện cho một cách nói, cách gọi tên cùng một thứ bằng nhiều ngôn ngữ  khác nhau.\r\n“Loài người thật là vất vả với  việc đó.” Kengah có lần từng nhận xét với  một chị hải âu đồng hành. “Không như hải âu bọn mình, trên khắp thế giới cũng chỉ quang quác y như nhau.”\r\n“Cô nói đúng. Kỳ quặc nhất là đôi khi họ vẫn tìm được cách để hiểu nhau đấy,” chị bạn quàng quạc đáp lại.\r\nQua khỏi mép nước, quang cảnh chuyển dần sang màu lục tươi sáng. Kengah có thể nhìn thấy bãi chăn gia súc khổng lồ điểm xuyết những bầy cừu đang gặm cỏ trong vòng tay bảo vệ của đê điều và những cánh quạt trễ nải trên cối xay gió.\r\nTheo sự hướng dẫn của hải âu hoa tiêu, đàn chim từ Hải Đăng Cát Đỏ đón lấy một luồng khí lạnh rồi lao xuống vũng cá trích. Một trăm hai mươi thân hình lao xuyên mặt nước như những mũi tên, và khi trở lại, con nào cũng có cá kẹp ngang mỏ.\r\nCá trích ngon tuyệt. Ngon và béo ngậy. Đó chính xác là thứ chúng cần để hồi phục năng lượng trước khi tiếp tục hành trình tới Den Helder, nơi chúng sẽ nhập cùng đàn từ quần đảo Frisian.\r\nTheo như lịch trình, chúng sẽ tiếp tục bay tới Calais, qua eo biển Dover, và trên không vực eo biển Măng-sơ, chúng sẽ găp nhựng đàn chim bay từ vịnh Seine và vực Saint-Malo. Rồi chúng sẽ cùng nhau bay tới vùng trời vịnh Biscay.\r\nKhi đó, sẽ có tới cả nghìn con hải âu, một đám mây bạc di chuyển nhanh nhẹn, có thể còn được nhân rộng ra với những đàn chim tới từ Belle-île-en-Mer, từ île d’Oléron, mũi Machicano, mũi Ajo và mũi Penas. Khi các đàn hải âu tuân theo luật biển và gió tập trung đầy đủ ở vịnh Biscay, Đại Hội Hải âu các vùng Baltic, Biển Bắc, và Đại Tây Dương sẽ được bắt đầu.\r\nĐó hẳn sẽ là những ngày tươi đẹp, Kengah mơ màng khi nuốt chửng con cá trích thứ ba. Đã thành thông lệ hàng năm, chúng sẽ được lắng nghe những câu chuyện thú vị, đặc biệt là chuyện của đàn hải âu từ mũi Penas, những kẻ ngao du không biết mệt mỏi, đôi khi còn bay xa tới tận quần đảo Canary hay quần đão mũi Verde.\r\nĐám hải âu mái như cô sẽ dành trọn sức lực cho bữa tiệc cá mòi hay mực ống, khi đám hải âu trống xây tổ trên đỉnh vách đá. Ở đó, hải âu mái sẽ đẻ trứng, ấp ủ, bảo vệ chúng khỏi hiểm nguy, và rồi sau khi chim non thay lông tơ và trổ những chiếc lông vũ đầu tiên, sẽ tới khoảnh khắc đẹp đẽ nhất trong suốt cuộc hành trình: dạy những chú hải âu con bay trên vịnh Biscay.\r\nKengah sục đầu xuống nước bắt con cá trích thứ tư, vì thế cô không nghe thấy tiếng quang quác báo động xé toạc cả không trung: “Cảng biển nguy hiểm! Cất cánh khẩn cấp!”\r\nKhi Kengah nhô đầu khỏi mặt nước, cô nhận ra mình hoàn toàn trơ trọi giữa đại dương bao la.', 1),
(2, 'Chương 2 - Con Mèo Mun To Đùng, Mập Ú\r\n', '“Tao thật ghét phải để mày lại một mình,” cậu nhóc nói, ve vuốt cái lưng con mèo mun to đùng, mập ú.\r\nRồi cậu quay lại với việc nhét đồ đạc vào balô. Cậu chọn một băng cát-sét của The Pur, một trong những thứ đồ cậu ưa thích, nhét nó vào balô, suy nghĩ, rồi lại lấy ra. Cậu không thể nào quyết định được sẽ cất nó vào balô hay để nó lại trên bàn. Thật là khó biết cái gì nên mang theo và cái gì nên để lại khi đi nghỉ mát.\r\nCon mèo mun béo mập đang ngồi trên bậu cửa sổ, chỗ nó rất khoái, theo dõi cậu nhóc đầy chăm chú.\r\n“Tao đã bỏ kính bơi vào chưa ấy nhỉ? Zorba, mày có thấy cặp kính của tao đâu không? Mà không. Mày không thể biết nó là cái gì vì mày đâu có ưa nước. Mày không biết là mày đã bỏ phí cái gì đâu. Bơi lội là một trong những trò thể thao hay ho nhất đấy. Làm một miếng không?” cậu bé hỏi, nhấc hộp thức ăn Bé Mèo Măm Măm lên.\r\nCậu trút ra một phần ăn nhiều hơn cả mức hào phóng, và con mèo mun béo mập bắt đầu nhấm nháp thật khoan thoai để kéo dài sự sung sướng. Đúng là một bữa ngon, giòn và đậm đà vị cá!\r\nCậu chủ quả là tốt bụng, con mèo nghĩ, miệng đầy những mảnh vụn. Ý ta là gì ấy nhỉ, một cậu nhóc tốt bụng thôi ư? Cậu chủ phải là xịn nhất ấy chứ! Nó tự đính chính khi nuốt thức ăn.\r\nZorba, con mèo mun to đùng, mập ú, có lý do thích đáng cho quan điểm của mình về cậu nhóc, người không chỉ chịu xuất tiền tiêu vặt thết đãi Zorba món ngon mà còn giữ  cho cái thùng nơi Zorba đi vệ sinh luôn sạch sẽ. Cậu tán chuyện với nó và dạy dỗ nó những điều quan trọng.\r\nHọ thường dành nhiều giờ ngồi ngoài ban công, ngắm cảnh giao thông rộn rịp ở cảng biển Hamburg. Rồi kế đó, cậu nhóc sẽ bắt đầu nói, kiểu như, “Mày thấy cái thuyền kia không, Zorba? Mày có biết nó từ đâu tới không? Từ Liberia đấy, một nước ở Châu Phi cực kỳ hay, do những người từng sống đời nô lệ sáng lập. Khi nào lớn, tao sẽ trở thành thuyền trưởng một tàu viễn dương lớn, rồi tao sẽ tới Liberia. Mày cũng sẽ đi cùng tao đấy, Zorba ạ. Mày sẽ là một con mèo vượt đại dương ngon lành. Tao chắc chắn đấy!”\r\nGiống như mọi đứa trẻ sống quanh khu cảng, cậu nhóc này cũng mơ mộng được du hành tới những đất nước xa xôi. Con mèo mun to đùng, mập ú lắng nghe, gừ gừ trong cổ. Nó có thể tưởng tượng ra mình trên boong một con tàu viễn dương khổng lồ đang chạy xuyên qua những lớp sóng.\r\nĐúng, Zorba rất yêu quý cậu nhóc và không bao giờ quên rằng nó nợ cậu mạng sống của mình.\r\nMón nợ của Zorba bắt đầu từ ngày nó bỏ cái giỏ vốn từng là mái ấm gia đình cùng với  bảy anh chị em khác.\r\nSữa của mèo mẹ thật ngọt ngào, ấm áp, nhưng nó cũng muốn nếm thử mấy cái đầu cá mà người ở chợ hay quẳng cho lũ mèo lớn. Nó cũng không định đi ăn mảnh một mình. Không hề. Ý định của nó là sẽ quay lại giỏ và bảo với các anh chị em khác, “Bú sữa mẹ thế này là đủ lắm rồi! Mọi người không thấy mẹ gầy đi thế nào sao? Ăn miếng cá này đi, đây là thứ mà tất cả bọn mèo ở cảng đều ăn đó.”\r\nVài ngày trước khi Zorba rời khỏi giỏ, mèo mẹ đã rất nghiêm khắc nói với  nó, “Con đã có chân cẳng và giác quan nhanh nhạy. Mấy điều đó tốt thôi, nhưng con phải biết thận trọng mỗi khi đi đâu. Mẹ không muốn con bò ra giỏ. Mai kia thôi, con người sẽ tới và quyết định số phận của con, cũng như của các anh chị em con. Mẹ đảm bảo là họ sẽ đặt cho con cái tên hay và cho con mọi đồ ăn con muốn. Con thật may mắn vì được sinh ra ở cảng, người dân cảng thường yêu thương và bảo vệ loài mèo. Điều duy nhất họ mong đợi ở chúng ta là giúp xua đuổi lũ chuột. Ồ, đúng rồi, con trai. Con thật may mắn khi là một con mèo ở cảng, nhưng con vẫn phải cẩn thận. Chỉ có một điều ở con có thể gây ra rắc rối. Trông các anh chị em của con đi, con trai. Con thấy tất cả chúng nó đều lông xám rồi chứ? Và lông của chùng đều có vằn như da hổ. Còn con, ngược lại, khi sinh ra đã đen từ  đầu tới chân, chỉ trừ túm lông trắng dưới cằm. Có những người còn tin là mèo đen mang tới điềm xấu. Vì vậy, con trai, mẹ không muốn con ra khỏi giỏ.”\r\nNhưng Zorba, lúc đó chỉ là một quả bóng lông bé xíu đen óng như than, cứ lén bò ra khỏi giỏ. Nó muốn ăn thử một cái đầu cá. Và nó cũng muốn biết thêm tí xíu về thế giới bên ngoài.\r\nNó cũng chưa đi được xa. Khi líu ríu tìm tới chỗ quầy cá với cái đuôi dựng đứng run run, nó chạy ngang qua con chim to tướng đang gà gật, cái đầu ngoẹo sang một bên. Đó là một con chim cực kỳ xấu xí với cái bọng lớn lủng lẳng dưới mỏ. Hẫng một cái, chú mèo con cảm thấy mặt đất dưới chân biến mất và còn chưa hiểu chuyện gì đang xảy ra, nó đã nhận ra mình đang lộn nhào trên không. Nhớ lại một trong những lời dạy đầu tiên của mẹ, nó tìm vị trí có thể đáp xuống bằng cả bốn chân. Nhưng thay vào đó, nó thấy bên dưới con chim đang ngoác cái mỏ chờ đón. Nó rơi tọt vào cái bọng, trong đó tối thui và bốc mùi phát khiếp.\r\n“Nhả tao ra! Nhả tao ra!” con mèo con gào lên tuyệt vọng.\r\n“Úi… Nó biết nói,” con chim lầu bầu mà không cần mở mỏ. “Mày là cái giống gì thế?”\r\n“Nhả tao ra không tao cào cho bây giờ,” con mèo ngao lên đe doạ.\r\n“Tao nghĩ mày là con ếch. Mày có phải ếch không?” con chim hỏi, kẹp thật chặt cái mỏ dài.\r\n“Ta chết ngộp trong này mất thôi, con chim ngu ngốc kia!” mèo con gào lên.\r\n“Đúng rồi. Mày là ếch. Một con ếch đen. Kỳ quặc ghê.”\r\n“Tao là mèo, và tao phát điên lên rồi đây. Nhả tao ra không thì mày phải ân hận đấy!” Zorba bé bỏng đe doạ, lần mò trong cái bọng tối thui để tìm chỗ cắm móng vuốt.\r\n“Mày tưởng là tao không biết mèo với ếch khác chỗ nào hử? Mèo có lông, nhanh nhẹn và có mùi dép đi trong nhà. Mày là ếch. Có lần tao đã chén vài con ếch rồi, cũng không đến nỗi tệ. Nhưng chúng đều có màu xanh. Nói xem, mày không phải ếch độc chứ, hử?” con chim rên lên, thoáng chút lo sợ.\r\n“Đúng! Đúng, tao là con ếch độc, và hơn nữa, tao còn mang tai hoạ đến cho mày đấy!”\r\n“Ôi, làm thế nào bây giờ? Tao từng xực nguyên con cầu gai độc mà vẫn sống ngon lành. Làm thế nào bây giờ? Tao sẽ nuốt chửng mày hay nhè mày ra đây?” con chim phân vân. Bỗng nó đột nhiên ngừng lải nhải, bắt đầu nhảy lên nhảy xuống và vỗ cánh bồm bộp. Cuối cùng, nó cũng chịu há mỏ ra.\r\nZorba bé nhỏ, người đầy nhớt dãi, cố ngoi đầu lên và nhảy ra ngoài. Rồi nó thấy cậu nhóc đang tóm lấy cổ con chim, lắc lấy lắc để.\r\n“Mày mù rồi hả, con bồ nông đần độn này! Lại đây nào, mèo con. Tí nữa thì mày tiêu đời trong bụng con chim già xấu xí kia rồi.” Cậu nhóc nói rồi bế Zorba lên tay.\r\nVà đó là khoảnh khắc bắt đầu cho tình bạn kéo dài đã năm năm nay.\r\nNụ hôn của cậu nhóc trên trán làm phân tán những hồi tưởng của Zorba. Nó nhìn bạn mình khoác balô lên vai, đi ra cửa, và nán ở đó vẫy chào tạm biệt nó lần nữa.\r\n“Bọn mình sẽ không gặp nhau trong suốt bốn tuần lễ. Tao sẽ nhớ tới mày hàng ngày, Zorba ạ tao hứa đấy.”\r\n“Tạm biệt, Zorba!” “Tạm biệt” Hai thằng nhóc em cũng gào lên và vẫy chào rối rít.\r\nNó lắng nghe tiếng then cài cửa vang lên hai lần, rồi chạy tới cửa sổ nhìn xuống phố, quan sát gia đình chủ lái xe đi.\r\nCon mèo mun béo mập hít một hơi sâu, khoan khoái. Trong suốt bốn tuần lễ, nó đàng hoàng là chúa tể, là chủ nhân của cả căn hộ. Một người bạn của nhà chủ mỗi ngày sẽ tới mở một hộp đồ ăn mèo và dọn dẹp cái thùng vệ sinh của Zorba. Có tới những bốn tuần để nằm ườn trên ghế bành, trên giường hay vọt ra ban công, leo lên mái nhà lợp ngói, nhảy vù từ đó sang mấy cành cây dẻ già, rồi trượt theo thân cây xuống sân trong, nơi nó vẫn khoái tụ tập cùng đám mèo hàng xóm. Nó sẽ chẳng thấy chán tí nào đâu. Không đời nào!\r\nÍt nhất đó là điều mà Zorba, con mèo mun to đùng, mập ú hình dung ra, bởi nó không thể nào biết được chuyện gì sẽ tới.', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collection`
--

CREATE TABLE `collection` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_book` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci,
  `id_user` int(11) DEFAULT NULL,
  `id_book` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nameuser` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` mediumtext COLLATE utf8mb4_unicode_ci,
  `mail` mediumtext COLLATE utf8mb4_unicode_ci,
  `DoB` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `nameuser`, `username`, `pass`, `mail`, `DoB`) VALUES
(1, 'Nguyễn Phúc Nguyên Phi', 'admin', '123', 'kiritosao1526@gmail.com', '1999-12-14 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
