-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2020 at 10:55 AM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodCode` int NOT NULL,
  `foodName` varchar(50) NOT NULL,
  `foodLine` varchar(50) NOT NULL,
  `buyPrice` int NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodCode`, `foodName`, `foodLine`, `buyPrice`, `img`) VALUES
(1001, 'Nhãn lồng', 'Trái cây', 25, NULL),
(1002, 'Đào Sapa', 'Trái cây', 50, NULL),
(1003, 'Mận Bắc Hà', 'Trái cây', 75, NULL),
(1004, 'Bưởi Đoan Hùng- Phú Thọ', 'Trái cây', 45, NULL),
(1005, 'Quả thanh mai', 'Trái cây', 60, NULL),
(1006, ' Rau cải ngồng ', 'Rau củ', 10, NULL),
(1007, 'Bí đỏ', 'Rau củ', 12, NULL),
(1008, 'Dưa chuột', 'Rau củ', 15, NULL),
(1009, 'Rau cải chíp', 'Rau củ', 15, NULL),
(1010, 'Thanh long', 'Trái cây', 37, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fooddetails`
--

CREATE TABLE `fooddetails` (
  `foodCode` int NOT NULL,
  `foodVendor` varchar(50) NOT NULL,
  `foodDescriptions` text NOT NULL,
  `quantityInStock` smallint NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `foodName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fooddetails`
--

INSERT INTO `fooddetails` (`foodCode`, `foodVendor`, `foodDescriptions`, `quantityInStock`, `img`, `foodName`) VALUES
(1001, 'Hưng Yên', 'Nhãn Hưng Yên nức tiếng gần xa bởi hương vị ngọt thơm, giòn giòn và căng mọng nước của phần cùi dày có màu trắng ngà, hạt nhỏ đen nháy. Những trái nhãn đã từng một thời là loại quả cung tiến vua chúa.\r\n\r\n', 77, NULL, 'Nhãn lồng'),
(1002, 'Sapa', 'Sapa được ví như cảnh tiên, lại có trái Đào Tiên nhỏ nhỏ xinh xinh lại càng thêm tuyệt đẹp. Trái đào có cả ở Sapa và Mộc Châu, được người dân trồng để lấy hoa, còn quả cho vào các rọ và đem đến những phiên chợ bán. Hình ảnh các chị các mẹ đeo rọ đầy trái đào trên lưng đi bán, cũng làm cho Sapa nên thơ hơn.\r\n\r\n', 45, NULL, 'Đào Sapa'),
(1003, 'Tỉnh Lào Cai', 'Một số nơi gọi là mận Hà Nội. Mận Bắc Hà là loại trái cây được ưa thích trong các loại trái cây đặc sản miền Bắc. Khi chín, mận có màu đỏ bầm và chuyển từ vị chua thanh thanh và hơi chát sang vị ngọt.Bắc Hà cũng là một vùng núi thuộc tỉnh Lào Cai, nên vào mùa mận, du khách nô nức kéo đến đây để vừa du lịch vừa thưởng thức trái thơm quả lạ.', 33, NULL, 'Mận Bắc Hà'),
(1004, 'Tỉnh Phú Thọ', 'Nếu như các loại trái cây đặc sản miền Nam có bưởi Năm Roi thì nhắc tới trái cây miền Bắc đặc sản sẽ không thể không có bưởi Đoan Hùng. Những trái bưởi có hình cầu dẹp, vỏ hơi héo và thường có màu vàng, mùi thơm khi chín. Khác với bưởi Thanh Trà hay bưởi Năm Roi, bưởi Đoan Hùng- Phú Thọ tép nhỏ, ráo nước và thường bảo quản được rất lâu.', 12, NULL, 'Bưởi Đoan Hùng- Phú Thọ'),
(1005, 'Tỉnh Quảng Ninh', 'Quả thanh mai hay còn gọi là quả dâu rừng, được trồng nhiều ở Lào Cai và Quảng Ninh.Vì mọc trên rừng nên lượng quả thanh mai mỗi mùa không nhiều và không có các chất bảo quản. Từ khoảng tháng 3 đến tháng 5 là mùa thanh mai.Do có vị chua nhẹ nên thanh mai thường ngâm đường, mật ong làm nước uống giải nhiệt mùa hè, siro trị ho làm đẹp da đều rất tốt. Ngoài ra, thanh mai cũng có thể rửa sạch ăn ngay.', 15, NULL, 'Quả thanh mai'),
(1006, 'NCC Bình An', 'Chứa nhiều dưỡng chất cần thiết như vitamin B1, B2, betacaroten… nên cải ngồng là thực phẩm rất tốt cho sức khỏe. Loại rau này có khả năng ức chế hình thành sắc tố melanin, giúp da sáng đẹp. Ăn nhiều cải ngồng còn có công dụng sáng mắt nhờ thành phần tiền sinh tố A. Các bà nội trợ có thể dùng cải ngồng làm nguyên liệu để chế biến nhiều món ăn như: cải ngồng luộc, cải ngồng xào nấm, cải ngồng xào hải sản… đều rất thơm ngon, bổ dưỡng.', 50, NULL, 'Rau cải ngồng'),
(1007, 'NCC Thành Long', 'Bí đỏ tròn được nhập từ nhà cung cấp Thành Long – nơi sở hữu các nông trại đạt chuẩn và canh tác, chăm sóc tỉ mỉ để thu được những quả bí chất lượng. Đặc biệt, sản phẩm được trồng bằng phân bón hữu cơ, không sử dụng các hóa chất gây hại, đảm bảo không ảnh hưởng đến sức khỏe người tiêu dùng. \r\n\r\nTrong bí đỏ có hàm lượng sắt cao, các chất muối khoáng, giàu vitamin và các axit hữu cơ tốt cho cơ thể. Không chỉ chế biến nhiều món ăn bổ dưỡng như súp bí đỏ thịt viên, gà om bí đỏ, bánh bí đỏ chiên giòn,… mà bí đỏ còn có công dụng giúp ngăn ngừa ung thư, hỗ trợ giảm cân, chống lão hóa da, tốt cho hệ tiêu hóa, hệ thống xương khớp… Do đó, bí đỏ chắc chắn là một loại rau củ quả sạch lý tưởng cho thực đơn bữa ăn hàng ngày để bạn chăm sóc chu đáo cho sức khỏe của cả gia đình.\r\n\r\n', 65, NULL, 'Bí đỏ'),
(1008, 'NCC Ngọc Linh', 'Cải chíp là một loại rau củ quả sạch được nhiều chị em yêu thích tại VinMart vì chứa nhiều chất xơ có lợi cho tiêu hóa, giàu giá trị dinh dưỡng, chứa nhiều khoáng chất và các vitamin A, caroten, B1, B2, B3, C, E… Những chất này có công dụng bồi bổ sức khỏe, tăng sức đề kháng, hoạt huyết, nhuận trường, giải độc, lọc máu, giảm huyết áp, làm đẹp da,… \r\n\r\nCác bà nội trợ có thể dễ dàng chế biến nhiều món ăn ngon như cải chíp xào nấm, cải chíp sốt dầu hào, cải chíp nấu ngao, nấu trứng,…. Và bạn có thể bảo quản loại rau này ở nơi thoáng mát hay trong ngăn mát tủ lạnh đều được.', 37, NULL, 'Rau cải chíp'),
(1010, 'Tỉnh Bình Thuận ', 'Thanh long có vị ngọt, rất mát và bổ nên được nhiều gia đình lựa chọn làm món tráng miệng, sinh tố hay làm bánh. Loại quả này có chứa vitamin C, B1, B2 và B3, các khoáng chất thiết yếu bao gồm phốt pho, sắt và canxi, rất tốt cho sức khỏe. Cụ thể là có tác dụng làm đẹp da, chống ung thư, cải thiện sức khỏe tim mạch, kiểm soát và phòng chống bệnh tiểu đường, cải thiện hệ thống tiêu hóa và đặc biệt rất tốt cho mắt.', 20, NULL, 'Thanh long');

-- --------------------------------------------------------

--
-- Table structure for table `foodlines`
--

CREATE TABLE `foodlines` (
  `foodLine` varchar(50) NOT NULL,
  `textDescription` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `foodlines`
--

INSERT INTO `foodlines` (`foodLine`, `textDescription`, `img`) VALUES
('Rau củ', 'Rau (tiếng Anh: vegetable), có thời kỳ còn gọi là la ghim (từ tiếng Pháp: légume),[1] là tên gọi chung cho những bộ phận của thực vật được con người hay động vật dùng làm thực phẩm. Ý nghĩa này hiện vẫn được sử dụng phổ biến và áp dụng cho những thực vật có bộ phận ăn được, bao gồm hoa, quả, thân, lá, rễ và hạt. Định nghĩa thứ cấp của từ này không được thống nhất giữa các nền văn hóa và ẩm thực khác nhau. Nhìn chung, rau có thể không gồm quả, hoa, quả kiên và ngũ cốc, nhưng lại bao gồm các loại quả ngon miệng như cà chua và bí ngòi, hoa như bông cải xanh và hạt như đậu.\r\nRau có thể ăn sống hay nấu chín, đóng vai trò quan trọng trong việc bổ sung dinh dưỡng của con người, do rau ít chất béo và carbohydrate, nhưng dồi dào vitamin, khoáng chất và chất xơ. Nhiều chuyên gia dinh dưỡng khuyến khích mọi người bổ sung nhiều trái cây và rau tươi trong thực đơn hàng ngày, năm hay nhiều khẩu phần hơn trong một ngày.', ''),
('Trái cây', 'Trong thực vật học, quả (phương ngữ miền Bắc) hoặc trái (phương ngữ miền Nam) là một phần của những loại thực vật có hoa, chuyển hóa từ những mô riêng biệt của hoa, có thể có một hoặc nhiều bầu nhụy và trong một số trường hợp thì là mô phụ. Quả là phương tiện để thực vật phân tán hạt của chúng. Nhiều loại thực vật cho quả ăn được, được nhân giống bởi sự di chuyển của con người và các loài động vật theo mối quan hệ cộng sinh như là cách phát tán hạt giống và chất dinh dưỡng nói riêng.\r\nTheo ngôn ngữ chung, bình thường thì \"quả\" có nghĩa là một kết cấu nhiều thịt có hạt của các loại thực vật, có vị chua hay ngọt và có thể ăn sống được, chẳng hạn như các loại táo, cam, nho, dâu, chuối và chanh. Mặt khác, ý nghĩa của \"quả\" theo thực vật học bao gồm nhiều loại kết cấu mà thường không được gọi là \"quả\" chẳng hạn như là các dạng \"quả đậu\", \"bắp ngô\", \"hạt lúa mì\" và cà chua.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodCode`),
  ADD KEY `foodLine` (`foodLine`);

--
-- Indexes for table `fooddetails`
--
ALTER TABLE `fooddetails`
  ADD PRIMARY KEY (`foodCode`);

--
-- Indexes for table `foodlines`
--
ALTER TABLE `foodlines`
  ADD PRIMARY KEY (`foodLine`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodCode` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `fooddetails`
--
ALTER TABLE `fooddetails`
  MODIFY `foodCode` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`foodLine`) REFERENCES `foodlines` (`foodLine`);

--
-- Constraints for table `fooddetails`
--
ALTER TABLE `fooddetails`
  ADD CONSTRAINT `fooddetails_ibfk_1` FOREIGN KEY (`foodCode`) REFERENCES `food` (`foodCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
