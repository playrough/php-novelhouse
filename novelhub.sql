-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 10:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novelhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_key` varchar(20) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `cover_image` varchar(200) NOT NULL,
  `author` varchar(50) NOT NULL,
  `summary` varchar(1000) NOT NULL,
  `chapters` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_key`, `genre_id`, `title`, `cover_image`, `author`, `summary`, `chapters`, `views`, `likes`) VALUES
(1, 'N001', 4, 'Solo Leveling', 'assets/images/solo-leveling.jpg', 'Chugong', 'Mười năm trước, những Cánh Cổng kết nối thế giới thật với thế giới quái vật mở ra. Một số người nhận được năng lực để chiến đấu với quái vật bên trong Cánh Cổng. Họ được gọi là Thợ Săn. \r\nTuy nhiên, không phải tất cả Thợ Săn đều mạnh. \r\nTên tôi là Sung Jin-Woo, Thợ Săn hạng E. Tôi phải mạo hiểm mạng sống ngay trong cả những hầm ngục yếu nhất. Và được mệnh danh là “Thợ Săn yếu nhất”. Không có lấy một kĩ năng nào, tôi chỉ có thể kiếm chút tiền còm từ việc chiến đấu với quái vật ở những hầm ngục cấp thấp… ít nhất là cho đến khi tôi tìm thấy một hầm ngục bí mật với độ khó cao kỳ quặc! \r\nVào phút cuối cùng, lúc mà tôi đã sẵn sàng để đón nhận cái chết, tôi nhận được một sức mạnh lạ lùng, một bảng nhiệm vụ mà chỉ mỗi tôi có thể thấy, một hệ thống tăng cấp bí mật mà chỉ mình tôi biết! Nếu tôi rèn luyện theo như các nhiệm vụ và săn quái vật, tôi sẽ được tăng cấp. \r\nChuyển từ Thợ Săn yếu nhất thành Thợ Săn mạnh nhất hạng S!', 200, 3464544, 3213215),
(2, 'N002', 7, 'Ngẫu Nhiên Bày Quầy Bán Hàng, Khách Hàng Đuổi Theo Tôi Suốt Mười Con Phố', 'assets/images/ngau-nhien-bay-quay-ban-hang.jpeg', 'Mại Kê Đản Hán Bảo Lạc', 'Sau khi đột tử, Lâm Chu xuyên đến thế giới song song. Sau đó xảy ra chuyện ngoài ý muốn, cậu bị trói chặt với một hệ thống mỹ thực.\r\nThứ hai đầu tuần sẽ mở quầy hàng ở một địa điểm ngẫu nhiên nào đó, bán một món ngon bất kỳ, khách khứa tìm đến cũng chẳng ai giống ai.\r\nBán bánh bao ở cổng công viên, bán cháo trứng muối thịt nạc trên đỉnh núi hay mứt quả trước cổng trường…món nào cũng làm người ta ứa nước miếng, muốn ngừng mà không được.\r\nNgay lúc lúc quán ăn toàn món ngon khiến khách hàng nhớ mãi không quên, kéo đến ùn ùn…”Đù má, ông chủ bán bánh bao đâu rồi?” “Chỉ vì một bát cháo mà nửa đêm tôi hùng hục leo núi, sợ muộn nên còn không dám ngủ luôn! Kết quả ông chủ lại mất hút con mẹ nó luôn?”…\r\nLàm các thực khách phát hiện chủ quán của những quầy hàng này vậy mà đều là cùng một người, chỉ là địa điểm quầy hàng không cố định, đồ ăn cũng mỗi lần mỗi khác.', 361, 2521461, 10872),
(3, 'N003', 7, 'Mảnh Ghép Tận Thế', 'assets/images/manh-ghep-tan-the.jpeg', 'Canh Tòng Tâm', 'Pháp tắc sinh tồn tại tận thế: hãy tránh bi thương, sợ hãi, phẫn nộ, ở ngoài tháp bất luận tâm tình tiêu cực gì cũng đều có thể hấp dẫn quái vật kinh khủng.\r\n\r\nNgủ một giấc tỉnh lại, phát hiện ra mình đi tới Tòa Tháp Tận Thế, nhân loại ở trong Tòa Tháp, ngoài tháp đều là quái vật. Mà Bạch Vụ trọn vẹn bảy năm chưa từng có bất luận tâm tình tiêu cực gì, đột nhiên cảm thấy được tận thế này......còn rất hữu hảo.', 1938, 1567459, 13655),
(4, 'N004', 1, 'Nhất Ngôn Thông Thiên', 'assets/images/nhat-ngon-thong-thien.jpeg', 'Hắc Huyền', 'Trời có cửu trọng, mà có bát hoang, ta muốn thất giới tranh hùng, không cầu không cầu lục đạo nương thân, ta đoạt người ngũ cốc, đã từng hành hiệp tứ hải, tam sinh tình cảm cố gắng, hai đời làm tiên, chỉ nguyện một lời thông thiên!', 1904, 135913, 7323),
(5, 'N005', 3, 'Kim Đan Là Hằng Tinh, Ngươi Gọi Đây Là Tu Tiên Sao', 'assets/images/kim-dan-la-hang-tinh.jpeg', 'Tẩu Địa Hạc', 'Ta là Tề Nguyên, chỉ là một kẻ xuyên việt, trở thành Đại sư huynh của Thất sắc phong.\r\n\r\nTa có một cái ngọc giản, có thể thông với chư thiên.\r\n\r\nCặp mắt của ta, có thể nhìn thấy tin tức ẩn tàng.\r\n\r\nChỉ là một ngọn cỏ nhỏ bình thường, nhưng ba ngày trước, Khô Mộc Chân Quân cùng hoàng hậu Đại Thương từng hẹn hò ở đây.\r\n\r\nNàng tên Nguyễn Nhất Tịch, ngoài mặt nàng là sư phụ mỹ nữ của ngươi, nhưng trên thực tế lại có thể là lão bà của ngươi.\r\n\r\nĐây là thiên đạo của thế giới, là linh vật Thiên đạo tốt nhất để trúc cơ.\r\n\r\nĐây là một cái tinh cấu không có sinh linh, nói không chừng có thể luyện hóa thành Kim Đan của ngươi.\r\n\r\nVì vậy, tu tiên lộ kỳ quái của ta đần dần mở màn.\r\n\r\nThiên đạo? Đây không phải Linh vật trúc cơ - Thiên Đạo sao?\r\n\r\nThật nhiều tinh cầu hoang vu, đều luyện thành Kim Đan đi!\r\n\r\nLấy thiên đạo mà trúc cơ, luyện tinh thần thành Kim Đan.\r\n\r\nTên ta Tề Nguyên, vạn vật tới khởi nguyên!\r\n\r\n. . .\r\n\r\nTa tên khương Linh Tố, mang theo mục đích mà không ai biết, gia nhập Thắt sắc phon', 186, 534336, 6443),
(6, 'N006', 8, 'Năm Ấy Hoa Nở 1981', 'assets/images/nam-ay-hoa-no-1981.jpeg', 'Phong Tùy Lưu Vân', 'Năm Ấy Hoa Nở 1981 là một tác phẩm thuộc thể loại đô thị tình yêu, do tác giả Phong Tùy Lưu Vân sáng tác. Truyện kể về thời đại mà việc thi đỗ đại học giống cá vượt long môn, là thời đại mà ánh đèn sân khấu ở khắp mọi nơi, cũng là thời đại vẫn còn có tình yêu chân thành và không thay đổi.\r\n\r\nTuy nhiên, nhân vật chính Lý Dã mới vừa đến thời đại này, lại bị khuyên là từ bỏ kỳ thi đại học để vào nhà máy vặn ốc.\r\n\r\nDù sao bạn cũng không thể thi đỗ, hãy từ bỏ đi!\r\n\r\nTa, một tuyển thủ chạy nước rút cấp 2, không thể thi đỗ? Thế thì không phải là phí công bao năm thầy giáo thể dục dạy dỗ sao?', 161, 371175, 562),
(7, 'N007', 1, 'Nhất Niệm Vĩnh Hằng', 'assets/images/nhat-niem-vinh-hang.webp', 'Nhĩ Căn', 'Nhất niệm thành biển cả, nhất niệm hóa nương dâu.\r\nNhất niệm trảm nghìn Ma, nhất niệm giết vạn Tiên.\r\n\r\nChỉ có niệm của ta... là Vĩnh hằng.', 245, 2242377, 3755),
(8, 'N008', 3, 'Quỷ Bí Chi Chủ', 'assets/images/quy_bi_chi_chu.webp', 'Mực Thích Lặn Nước', 'Trong thuỷ triều của hơi nước và máy móc, ai có thể với tới sự phi phàm? Trong màn sương mù của lịch sử và bóng tối, ai đang thì thầm? Ta tỉnh dậy từ trong sự thần bí, mở mắt nhìn thế giới này.\r\nSúng ống, pháo, chiến hạm, phi thuyền, đủ mọi loại máy móc; Ma dược, bói toán, nguyền rủa, người treo ngược, vật phong ấn... Ánh sáng vẫn chiếu rọi như trước, nhưng thần bí vẫn chưa từng rời xa.\r\nĐây là truyền thuyết về \"Kẻ Khờ\".', 300, 1452775, 27552),
(9, 'N009', 2, 'Không Khoa Học Ngự Thú', 'assets/images/khong-khoa-hoc-ngu-thu.webp', 'Khinh Tuyền Lưu Hưởng', 'Thời Vũ xuyên đến một cái thế giới mới, nơi đây mọi người điều biết đến Ngự Thú và nhiều thứ liên quan đến nó. \r\n\r\nMột thế giới mà Ngự Thú Sư vừa có quyền lực, địa vị rất cao.....\r\n\r\nSau khi xuyên qua, Thời Vũ chợt nhận ra hắn còn mang thêm một cái Đồ Giám ở trong đầu, sau đó là hành trình Thời Vũ tạo ra những con sủng thú kỳ lạ, đầy mạnh mẽ và vượt qua sức tưởng tượng của Ngự Thú Sư khác.......', 312, 424388, 5233),
(10, 'N010', 7, 'Đều Trùng Sinh Ai Thi Công Chức A', 'assets/images/deu-trung-sinh-ai-thi-cong-chuc-a.jpeg', 'Liễu Ngạn Hoa Hựu Minh', 'Trần Trứ là một nhân viên công chức ở tỉnh, ngoài ý muốn trùng sinh về năm học lớp 12.\r\n\r\nThế là, một học sinh cấp ba chất phác ngại ngùng, nói chuyện cùng bạn nữ đều sẽ đỏ mặt, chỉ biết cắm đầu học.\r\n\r\nĐột nhiên trở thành một người hiểu thấu đạo đối nhân xử thế, nói chuyện và làm việc luôn đúng mực, không chỉ thay đổi quỹ tích nhân sinh, lại các khiến các bạn nữ chú ý.\r\n\r\n- Bạn nữ: Trần Trứ à, cậu có ưu điểm gì?\r\n\r\n- Trần Trứ: Người trung thực, không nói nhiều.\r\n\r\n- Bạn thân: Tao cảm thấy không nên gạt người, bây giờ mày chẳng trung thực chút nào.\r\n\r\n- Trần Trứ: Không có lừa gạt! Người có tuổi rồi, lời nói thật chẳng còn lại bao nhiêu.', 120, 1575018, 5794),
(11, 'N011', 1, 'Tu Chân Liêu Thiên Quần', 'assets/images/tu-chan-lieu-thien-quan.jpg', 'Thánh Kỵ Sĩ Đích Truyền Thuyết', 'Ngày nào đó, Tống Thư Hàng ngoài ý muốn gia nhập một cái tiên hiệp chuunibyou thâm niên người bệnh giao lưu group chat, trong group bạn chat đều lấy \"Đạo hữu\" gọi nhau, biệt danh đều là các loại Phủ chủ, Động chủ, Chân nhân, Thiên sư. Ngay cả chủ nhóm lạc đường chó cảnh đều xưng là đại yêu cẩu rời nhà trốn đi. Cả ngày nói chuyện là luyện đan, xông bí cảnh, luyện công kinh nghiệm cái gì.\r\n\r\nĐột nhiên có một ngày, lặn xuống nước hồi lâu hắn đột nhiên phát hiện... Trong group mỗi một cái thành viên, vậy mà toàn bộ là tu chân giả, có thể di sơn đảo hải, trường sinh ngàn năm cái chủng loại kia! A a a a, thế giới quan tại trong vòng một đêm hoàn toàn tan vỡ á!', 545, 2535445, 37458),
(12, 'N012', 3, 'Kiếm Lai', 'assets/images/kiem-lai.webp', 'Phong Hỏa Hí Chư Hầu', 'Thiếu niên họ Trần, tên Bình An, mồ côi cha mẹ từ khi còn nhỏ. Đồ sứ của trấn Nê Bình rất nổi tiếng, vì vậy từ khi triều đại khai quốc tới nay, nó liền mang cái danh kèm trọng trách ‘Phụng chiếu trông coi việc đốt lò làm đố hiến tế lăng’, theo đó, triều đình còn phái cả quan viên tới đóng chốt quanh năm ở đây để giám sát công việc của các lò.\r\n\r\nThiếu niên không nơi nương tựa như hắn từ bé tí đã trở thành thợ lò gốm sứ, lúc đâu chỉ có thể làm chút việc vặt nặng nhọc nhưng đơn giản, mất mấy năm theo chân lão sư phụ tính khí thất thường mới được học hỏi chút kỹ thuật làm gốm sứ, kết quả là thế sự vô thường, trấn nhỏ đột nhiên bị mất đi tấm bùa hộ mệnh mang chức năng làm đồ cho triều đỉnh, theo đó, hơn mười mấy hầm lò như rồng cuộn nằm khắp trấn chỉ trong một đêm đều bị quan phủ cưỡng chế bắt đóng cửa.\r\n\r\nTrần Bình An buông cành đào mới bị gãy xuống, thổi tắt nến, ra khỏi phòng rồi ngồi trên bậc thềm, ngửa đầu nhìn lên trời đêm đầy sao sáng.\r\n\r\nQua một thời gian sống vất vưởng vô công rỗi', 629, 514774, 15431),
(13, 'N013', 3, 'Cẩu Tại Yêu Võ Loạn Thế Tu Tiên', 'assets/images/cau-tai-yeu-vo.jpeg', 'Hắc Lang Chi Vương', 'Phương Tịch xuyên rồi, mà lại là nhị xuyên!\r\n\r\nỞ tu tiên giới ta bảo sao nghe vậy, ở dị giới ta trọng quyền xuất kích!\r\n\r\nKhông ngờ, trăm ngàn năm trôi qua, ở tu tiên giới cũng trở thành đại lão!', 926, 782485, 10125),
(14, 'N014', 5, 'Toàn Cầu Hung Thú: Ta Có Vô Số Thần Thoại Cấp Sủng Thú', 'assets/images/toan-cau-hung-thu-ta-co-vo-so-than-thoai-cap-sung-thu.jpg', 'Yếu Phi Đích Ngưu', 'Đinh! Sủng thú Bạo Phong Chi Ưng của ngươi thu được Thần Thoại Cấp thiên phú - Phong Bạo Chi Tử!\r\n\r\nĐinh! Sủng thú Bạo Phong Chi Ưng của ngươi giết chết ma hóa chim sẻ, kinh nghiệm + 100!\r\n\r\nĐinh! Sủng thú Nhân Diện Tri Chu của ngươi thu được Thần Thoại Cấp thiên phú - Hủ Thần Chi Độc!\r\n\r\nBa trăm năm trước, linh khí khôi phục, hung thú tàn sát bừa bãi, chín phần nhân loại bỏ mạng trong miệng hung thú!\r\n\r\nNhân loại tràn ngập nguy cơ!\r\n\r\nMay mà Ngự Thú Sư đột nhiên xuất hiện, mới khiến nhân loại miễn cưỡng đứng vững gót chân, sở hữu quyền tiếp tục sinh tồn!\r\n\r\nBa trăm năm sau, Tô Dương xuyên việt đến thế giới này, giác tỉnh Ngự Thú Sư thiên phú, thu được Dưỡng Sủng hệ thống, thu phục bồi dưỡng vô số Thần cấp sủng thú, trở thành vĩnh hằng truyền thuyết!', 785, 576541, 17275),
(15, 'N015', 1, 'Ta Thật Không Phải Cái Thế Cao Nhân', 'assets/images/ta-khong-phai-cai-the-cao-nhan.webp', 'Tâm Cảnh Vô Cực', 'Cái gì? Gà ta nuôi chính là Phượng Hoàng thuần huyết?\r\n\r\nCái gì? Cá chép ta nuôi đều là Chân Long?\r\n\r\nLý Phàm: Không, không có khả năng, tại sao ta lại có thể là cường giả cái thế được.\r\n\r\nHuyền Thiên Giới, Nam Vực, Hỏa Quốc. Ở bên ngoài thành Ly Dương, bên trong một sơn thôn nhỏ xa xôi, Lý Phàm giản dị bước ra sân nhỏ, trong tay cầm một bát ngô, hắn gọi vài tiếng, mấy con gà ở trong sân đều chạy đến.\r\n\r\nHắn đổ mấy hạt ngô cho gà ăn, sau đó lại đi đến gần hồ nước, quăng mồi cho một đàn cá chép vàng. Lúc này mới đi đến ruộng rau ở bên cạnh, nhổ cỏ, xới đất.', 2801, 585272, 17655),
(16, 'N016', 4, 'Đệ Nhất Danh Sách', 'assets/images/de_nhat_danh_sach.jpg', 'Hội Thuyết Thoại Đích Trửu Tử', 'Trên đất chết, văn minh nhân loại chỉ có thể kéo dài hơi tàn. Từng tòa nhà được gọi là hàng rào dần mọc lên, luật pháp và trật tự tan vỡ. Có người nói, khi thiên tai phủ xuống trái đất, ý chí của con người là vũ khí đệ nhất để vượt qua nguy hiểm. Có người nói, đừng để bi ai của thời đại trở thành bi ai của ngươi. Có người lại nói, ta muốn để bi ai của mình trở thành bi ai của thời đại. Một chuyện xưa mới bắt đầu. Qua khoảng thời gian hạo kiếp, ánh dương lần nữa trở lại.', 1319, 643247, 13247),
(17, 'N017', 1, 'Cầu Ma', 'assets/images/cau-ma.webp', 'Nhĩ Căn', 'Cầu ma là Nhĩ Căn kế Tiên Nghịch về sau lại một tu chân tác phẩm tâm huyết trong một chữ cầu, có hai giải, vừa là cầu khẩn, một là truy cầu. Nhưng ma lại không phải Ma Đầu, tác giả đem làm chủ góc Tô Minh mở ra một cái hoàn toàn mới tu chân cầu ma chi môn.\r\n\r\nNếu như các bạn đã từng là fan của truyện Tiên Nghịch, chắc các bạn không thể nào quên được tác giả Nhĩ Căn, một tác giả tuy mới nhưng bút lực có thể nói là vô cùng vững chắc. Qua nhiều ngày mong đợi, cuối cùng Nhĩ Căn đã cho ra tác phẩm mới: Cầu Ma.\r\n\r\nNhư thế nào là ma? Là người táng tận lương tâm, vì thành công mà không từ thủ đoạn, thậm chí tu hành ma công để thành ma đầu sao?\r\n\r\nNhĩ Căn không nghĩ thế, Nhĩ Căn muốn viết về một MA thật sự, chứ không phải là một ma đầu thô tục âm u. Với tác phẩm này, Nhĩ Căn mong muốn truyền đạt đến cho người đọc một cuộc sống đầy nhân sinh, một nội dung động lòng người. Với tác phẩm này, Nhĩ Căn muốn xây dựng một Tô Minh đứng trên đỉnh núi nhìn xuống trời đất, mang theo ý vị tang thương và bi ', 1480, 652774, 56321),
(18, 'N018', 1, 'Quang Âm Chi Ngoại', 'assets/images/quang-am-chi-ngoai.jpg', 'Nhĩ Căn', 'Thiên địa là vạn vật chúng sinh khách xá, quang âm là từ xưa tới nay khách qua đường.\r\n\r\nTử sinh khác biệt, thật giống như mộng cùng tỉnh khác biệt, xôn xao biến hóa, không thể cật vấn.\r\n\r\nNhư vậy siêu việt sinh tử, đã vượt ra thiên địa, tại quang âm bên ngoài , chờ đợi chúng ta là cái gì?', 540, 756728, 75675),
(19, 'N019', 3, 'Nữ Hiệp Chậm Đã', 'assets/images/nu-hiep-cham-da.jpg', 'Quan Quan Công Tử', 'Nữ hiệp chậm đã, ngươi có biết ta là người như thế nào?\r\n\r\nBiết, Nữ Đế bên người sủng thần, phản tặc đầu mục nhân tình, giang hồ danh môn Thiếu chủ. Chân đạp ba con thuyền, ta chém vào chính là ngươi!', 570, 1457683, 55518),
(20, 'N020', 3, ' Khánh Dư Niên', 'assets/images/khanh-du-nien.jpg', 'Miêu Nị', 'Nhà tích thiện, tất có dư khánh, lưu dư khánh, lưu dư khánh, chợt gặp ân nhân; Hạnh Nương thân, Hạnh Nương thân, tích đến âm công. Khuyên nhân sinh, tế khốn đỡ nghèo...... Mà ai có biết, nhân sinh tại thế, bên trên nhận dư khánh, cuối cùng lại là phải tự làm xuất đạo đường lựa chọn, chính là cái gọi là xóa nhánh phát:\r\n\r\nGió đông mang theo mây mưa, ấu dây leo nôn mầm non.\r\nGấp thúc như tần trống, rửa sạch nhung cùng Hoa.\r\nLại đợi Triều Dương đến, lục khắp trong đình đỡ.\r\nCàng trông mong lá vàng lúc, hái phải tính mai dưa...\r\n\r\nHắn là một thanh niên vô dụng điển hình, cả đời đếm đi đêm lại chẳng làm được mấy chuyện có ích.\r\n\r\nVì mắc một căn quái bệnh mà phải nằm trong bệnh viện chờ chết, hắn nghĩ, hình như nhân vật chính nào đó của cuốn tiểu thuyết kiếm hiệp nào đó cũng mắc một căn bệnh giống mình... Thế nhưng, nghĩ đến số phận hẩm hiu của mình, hắn cười tự giễu, hắn nào có phải nhân vật chính gì a?... Có phải không? Cùng theo dõi tác phẩm Khánh Dư Niên nhé.', 230, 747457, 47575),
(21, 'N021', 4, 'Linh Cảnh Hành Giả', 'assets/images/linh-canh-hanh-gia.jpg', 'Mại Báo Tiểu Lang Quân', 'Tuyên cổ thông kim, nghe đồn thế có Linh cảnh.\r\n\r\nLiên quan tới Linh cảnh thuyết pháp, các triều đại danh nhân nhã sĩ chúng thuyết phân đàn, trong thơ ghi chép:\r\n\r\n\"Từ Tề đến Đường, tư sơn thâm hoang, Linh cảnh tịch liêu, hiếm người du lịch.\"\r\n\r\n\"Linh cảnh không thể trạng, quỷ công lượng khó cầu.\"\r\n\r\nThân Thành đại học năm nhất tân sinh Trương Nguyên Thanh, tại dưới một lần cơ duyên xảo hợp, đạt được một tấm hội sở thẻ VIP Chí Tôn, a không, là thẻ thông hành Linh cảnh.', 757, 1256261, 75757),
(22, 'N022', 3, 'Thiếu Niên Ca Hành', 'assets/images/thieu-nien-ca-hanh.jpg', 'Chu Mộc Nam', 'Một thiếu niên thích mặc áo đỏ đầy nhiệt huyết.\r\n\r\nMột ông chủ keo kiệt của quán rượu rách nát.\r\n\r\nMột đệ tử thủ tịch của danh môn trên giang hồ\r\n\r\nBa người có vẻ chẳng hề liên quan lại gặp nhau trong một đêm tuyết. Mỗi người mang theo mục đích riêng, bọn họ cùng hộ tống một chiếc quan tài được chế bằng vàng ròng tới tòa thành Tất La nơi biên cảnh.\r\n\r\nGiang hồ đồn đại, trong quan tài vàng đó là mọi thứ mà người trong giang hồ khao khát: vàng bạc châu báu, bí kíp võ công, mỹ nhân tuyệt thế...\r\n\r\nLời đồn trong giang hồ chẳng sai. Vậy trong quan tài là gì? Mà khiến cả cặp đôi sát thủ đỉnh cấp giang hồ, hộ pháp của Ma giáo, phương trượng của Phật môn, tổng quản thái giám trong cung đều không thể rời mắt?', 250, 596856, 5858),
(23, 'N023', 2, 'Đạo Quỷ Dị Tiên', 'assets/images/dao-quy-di-tien.webp', 'Hồ Vĩ Bút', 'Quỷ dị Thiên Đạo, dị thường tiên phật, là thực sự? Là giả? Lâm vào hoang mang Lý Hỏa vượng không cách nào phân biệt. Có thể để hắn không cách nào phân biệt không chỉ chỉ là chút. Còn có chính hắn, bệnh hắn, bệnh rất nặng.', 1053, 148768, 28857),
(24, 'N024', 3, 'Tinh Môn', 'assets/images/tinh-mon.webp', 'Lão Ưng Cật Tiểu Kê', 'Tinh Môn: Thời Quang Chi Chủ\r\n\r\nTruyền thuyết, trong tinh không sâu thẳm cổ xưa có một cánh cửa màu đỏ sẫm bị máu và lửa liếm qua.\r\n\r\nTruyền kỳ và thần thoại, hắc ám xen kẽ quang minh, vô số truyền thuyết đều đang chảy xuôi dọc theo cánh cửa cổ xưa ấy.\r\n\r\nQuan sát tinh môn, nhiệt huyết chiếu rọi thiên địa, cuối cùng rồi hắc ám cũng sẽ rời đi!\r\n', 2950, 235673, 1988),
(25, 'N025', 1, 'Thanh Liên Chi Đỉnh', 'assets/images/thanh-lien-chi-dinh.webp', 'Tiêu Thập Nhất Mạc', 'Đây là câu chuyện của một gia tộc tu tiên, một gia tộc tu tiên nhỏ bé không đáng chú ý, có thể nói là chìm nghỉm trong thế giới tu tiên vô cùng khổng lồ. \r\n\r\nNhưng chính gia tộc tu tiên nhỏ bé ấy dưới sự cố gắng không ngừng nghỉ của tinh anh trong tộc, không tiếc trả giá, không tiếc bỏ qua bản thân, không tiếc xương máu để giúp gia tộc đi lên từng bước một. \r\n\r\nTừ gia tộc tu tiên lên đại tộc tu tiên, rồi thế gia chân linh, rồi tiên tộc… thế lực từng bước được mở rộng, sức mạnh từng bước được gia tăng, nhưng họ chưa bao giờ vì lợi ích mà quên đi sự tự hào của gia tộc, trách nhiệm bản thân đối với nhân tộc. \r\n\r\nCó thể nói Thanh Liên Chi Đỉnh là một tác phẩm tiên hiệp về xây dựng gia tộc, xây dựng thế lực mà những người yêu mến thể loại này không thể bỏ qua. ', 7355, 336686, 49957),
(26, 'N026', 11, 'Thiên Chi Hạ', 'assets/images/thien-chi-ha.jpeg', 'Tam Huyền', 'Côn Lôn kỷ nguyên, cửu đại môn phái phân trì thiên hạ vì làm mới một lần vị trí minh chủ mà minh tranh ám đấu, Tát giáo Man tộc ở quan ngoại trở lại xâm lược... Trong thời buổi loạn lạc, đông đảo chúng sinh chìm nổi muôn hình vạn trạng, cửu đại gia anh kiệt xuất hiện lớp lớp, cuối cùng hội tụ thành một bản sử thi hào hùng thời đại đại giang hồ, đồng thời thúc đẩy đại thế thiên hạ từ phân trì đến nhất thống.\r\n\r\n...\r\n\r\nVị hoàng đế cuối cùng, chết vào một trăm hai mươi năm trước.\r\n\r\nHậu nhân nói, đó là trời muốn diệt một triều đại không đạo. Quan ngoại, Man tộc thờ phụng Tát giáo nhắm thẳng vào trường thành, quan nội, Hà Nam tháng mười tuyết lớn, nạn châu chấu lại bao phủ Hồ Bắc, thuế khắc khe dịch trầm trọng, thiên tai khắp nơi, bách tính dùng con làm thực, róc thịt nướng, chồng bán vợ, cha bỏ con, không tài nào chịu nổi.\r\n\r\nTình cảnh này, kích động một vị nhân vật anh hùng ──\r\n\r\nNộ Vương xung quan, thiên hạ chấn động!', 753, 181676, 7815),
(27, 'N027', 7, 'Căn Cứ Số 7', 'assets/images/can-cu-so-7.webp', 'Tịnh Vô Ngân', 'Đây là một thế giới hoàn toàn u ám, đầy nguy hiểm chết chóc, nơi những bản năng, những thứ xấu xa nhất của loài người được bộc lộ, một thế giới mà chỉ có kẻ mạnh mới có thể sinh tồn, kẻ yếu thì sinh mạng như cỏ dại.\r\n\r\nĐộng lực của tất cả con người, đều đến từ hai chữ \"Tử Vong\". Bởi vì không muốn chết cho nên mới phải ăn mọi thứ, bởi vì không muốn chết cho nên mới liều mạng sinh tồn.\r\n\r\nỞ trong bóng tối đầy tuyệt vọng này, có một người luôn không ngừng cố gắng, liều mạng tu luyện, thậm chí đánh lừa cả thế giới để đạt được mục đích của mình. Nhưng theo thời gian dần trôi qua, hắn phát hiện rằng tận thế cũng không phải đơn giản là như vậy...\r\n\r\nThế giới này không tồn tại thứ gọi là may mắn đâu. Quy tắc, điều kiện tiên quyết, trạng thái tâm lý,... những yếu tố vô hình dẫn đến những kết quả không thể đoán trước được, và cũng không thể tránh khỏi. Vậy nên, người thắng cuộc đã được quyết định từ trước khi cuộc chiến bắt đầu rồi.\r\n\r\nQua khoảng thời gian hạo kiếp, ánh dương sẽ một lần nữa trở ', 1900, 68570, 1339);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'Tiên Hiệp'),
(2, 'Xuyên Không'),
(3, 'Huyền Huyễn'),
(4, 'Dị Năng'),
(5, 'Trò Chơi'),
(6, 'Linh Dị'),
(7, 'Đô Thị'),
(8, 'Ngôn Tình'),
(9, 'Lịch Sử'),
(10, 'Trinh Thám'),
(11, 'Kiếm Hiệp'),
(12, 'Võ Hiệp'),
(13, 'Dị Giới'),
(14, 'Thể Thao'),
(15, 'Huyền Bí'),
(16, 'Ma Pháp'),
(17, 'Cổ Đại'),
(18, 'Tây Phương'),
(19, 'Thường Ngày'),
(20, 'Hài Hước'),
(21, 'Nhẹ Nhàng');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `username`, `password`, `role`, `active`) VALUES
(1, 'Phạm Quang Minh', 'pqm', '8277e0910d750195b448797616e091ad', 1, 1),
(2, 'Nguyễn Trung Hậu', 'nth', '8277e0910d750195b448797616e091ad', 1, 1),
(3, 'Nguyễn Văn A', 'nva', '8277e0910d750195b448797616e091ad', 0, 1),
(4, 'Nguễn Thị D', 'ntd', '8277e0910d750195b448797616e091ad', 0, 0),
(5, 'Trần Văn C', 'tvc', '8277e0910d750195b448797616e091ad', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `book_key` (`book_key`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
