USE UNIVERSE;
-- đẩy dữ liệu vào bảng user_images
INSERT INTO `universe`.`user_images` (`url`, `size`, `format`, `upload_date`) VALUES ('public/images/users/avatar_default.jpg', '1.51kb', '.jgp', ' 2023-12-03 20:11:21');

-- đẩy dữ liệu vào bảng user
INSERT INTO `universe`.`users` (`name`, `address`, `phone`, `email`, `password`, `role`, `user_image_id`) VALUES ('universe', '101B Lê Hữu Trác, Sơn Trà, Đà Nẵng', '0353537180', 'universeTNT@gmail.com', 'universetnt', 'admin', '1');
INSERT INTO `universe`.`users` (`name`, `phone`, `email`, `password`, `role`, `user_image_id`) VALUES ('John Doe', '', 'john@example.com', 'hashedpassword', 'user', '1');
INSERT INTO `universe`.`users` (`name`, `email`, `password`, `role`, `user_image_id`) VALUES ('Jane Smith', 'jane@example.com', 'hashedpassword', 'user', '1');
INSERT INTO `universe`.`users` (`name`, `address`, `phone`, `email`, `password`, `role`, `user_image_id`) VALUES ('Nhung', '101B Lê Hữu Trác, Sơn Trà, Đà Nẵng', '0353537189', 'thuynhung2206@gmail.com', '12345678', 'user', '1');

-- đẩy dữ liệu vào bảng categories
INSERT INTO `universe`.`categories` (`name`) VALUES ('quần áo');
INSERT INTO `universe`.`categories` (`name`) VALUES ('mũ');
INSERT INTO `universe`.`categories` (`name`) VALUES ('giày');


-- đẩy dữ liệu vào bảng Products
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('[Có sẵn] Giày Nữ Đi Học Giày Vải Đế Cao Màu Be Phong Cách Hàn', '[Có sẵn] Dép Đi Học Siêu Nhẹ Hình Mặt Cười \nSiêu Cute Đế Cao Đi Êm Chân', 'TƯ VẤN CHỌN SIZE\nDép đúng size, vì size đôi nên không thể vừa khít tất cả các chân, các bạn nên lựa chọn theo thói quen đi dép của cá nhân ạ.\n\nĐế dép dày khoảng 3.5cm (đo bằng tay).\nĐế dép thiết kế chống trơn, chất liệu EVA hàng loại 1 thân thiện với môi trường.Dép đang hot lắm các bạn thích màu và size nào order luôn không hết màu, hết size ạ.Vì là size đôi nên có thể rộng hoặc chật hơn so với chân xíu các bạn lựa chọn theo thói quen thích đi rộng, chật của mỗi cá nhân ạ.', '300000', '4', '90', '10', '37 38 39 40 ', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('[Có sẵn] Dép Đi Học Siêu Nhẹ Hình Mặt Cười', '[Có sẵn] Dép Đi Học Siêu Nhẹ Hình Mặt Cười ', 'TƯ VẤN CHỌN SIZE', '400000', '4', '80', '20', '37 38 39 40 ', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Giày thể thao độn đế nữ 5cm đế bằng tăng chiều cao vải canvas đi được', '[Có sẵn] Dép Đi Học Siêu Nhẹ Hình Mặt Cười ', 'TƯ VẤN CHỌN SIZE', '500000', '4', '70', '30', '37 38 39 40 ', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Dép Xỏ Ngón Đế Dày Mềm Mại Thời Trang Cho Nữ', '[Có sẵn] Dép Đi Học Siêu Nhẹ Hình Mặt Cười ', 'TƯ VẤN CHỌN SIZE', '600000', '4', '60', '40', '37 38 39 40 ', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Giày dẫm gót thê thao dây thừng tròn đi được 2 kiểu 2 trong', '[Có sẵn] Dép Đi Học Siêu Nhẹ Hình Mặt Cười ', 'TƯ VẤN CHỌN SIZE', '700000', '4', '50', '50', '37 38 39 40 ', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Dày dép 1', '[Có sẵn] Dép Đi Học Siêu Nhẹ Hình Mặt Cười ', 'TƯ VẤN CHỌN SIZE', '800000', '4', '40', '60', '37 38 39 40 ', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Dày dép 2', '[Có sẵn] Dép Đi Học Siêu Nhẹ Hình Mặt Cười ', 'TƯ VẤN CHỌN SIZE', '900000', '4', '30', '70', '37 38 39 40 ', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `color`) VALUES ('Mũ lông cừu bucket retro phong cách hàn quốc giữ ấm thu đôn 1', 'Mũ lưỡi trai nam nữ - nón kết thêu logo LA thể thao kaki mềm mịn....', 'TƯ VẤN CHỌN SIZE', '300000', '4', '90', '10', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `color`) VALUES ('Mũ lưỡi trai nam nữ - nón kết thêu logo LA thể thao kaki mềm mịn', 'Mũ lưỡi trai nam nữ - nón kết thêu logo LA thể thao kaki mềm mịn....', 'TƯ VẤN CHỌN SIZE', '400000', '4', '80', '20', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `color`) VALUES ('[Ảnh thật] Mũ bucket vải Jeans in thêu 2 mặt chữ đioo cực đẹp', '[Ảnh thật] Mũ bucket vải Jeans in thêu 2 mặt chữ đioo cực đẹp ...', 'TƯ VẤN CHỌN SIZE', '500000', '4', '70', '30', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `color`) VALUES ('Mũ lưỡi trai nam nữ - nón kết thêu logo LA thể thao kaki mềm mịn', 'Mũ lưỡi trai nam nữ - nón kết thêu logo LA thể thao kaki mềm mịn....', 'TƯ VẤN CHỌN SIZE', '600000', '4', '60', '40', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `color`) VALUES ('Mũ 5', 'Mũ 5', 'TƯ VẤN CHỌN SIZE', '700000', '4', '50', '50', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `color`) VALUES ('Mũ 6', 'Mũ 6', 'TƯ VẤN CHỌN SIZE', '800000', '3', '40', '60', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `color`) VALUES ('Mũ 7', 'Mũ 7', 'TƯ VẤN CHỌN SIZE', '900000', '4', '30', '70', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `color`) VALUES ('Mũ 8', 'Mũ 8', 'TƯ VẤN CHỌN SIZE', '1000000', '4', '20', '80', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Sét Bộ Quần Áo Nỉ Dài Nữ Bo Chun Gấu DVGIT Cạp Chun Co Gãn', 'Sét Bộ Quần Áo Nỉ Dài Nữ Bo Chun Gấu DVGIT Cạp Chun Co Gãn...', 'TƯ VẤN CHỌN SIZE', '300000', '4', '90', '10', 'M L XL XXL', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Set áo quần dự tiệc sang chảnh, Set đồ nữ áo croptop tay bông bo', 'Set áo quần dự tiệc sang chảnh, Set đồ nữ áo croptop tay bông bo...', 'TƯ VẤN CHỌN SIZE', '400000', '4', '80', '20', 'M L XL XXL', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Sét bộ áo nỉ Hộp sữa + quần bom đen, Sét bộ mặc ở nhà, Áo', 'Sét bộ áo nỉ Hộp sữa + quần bom đen, Sét bộ mặc ở nhà, Áo...', 'TƯ VẤN CHỌN SIZE', '500000', '4', '70', '30', 'M L XL XXL', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Set áo khoác gile mix áo sơ mi thô kèm chân váy xếp ly phong cách ', 'Set áo khoác gile mix áo sơ mi thô kèm chân váy xếp ly phong cách ...', 'TƯ VẤN CHỌN SIZE', '600000', '4', '60', '40', 'M L XL XXL', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Set quần áo 5', 'Set quần áo 5', 'TƯ VẤN CHỌN SIZE', '700000', '4', '50', '50', 'M L XL XXL', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Set quần áo 6', 'Set quần áo 6', 'TƯ VẤN CHỌN SIZE', '800000', '4', '40', '60', 'M L XL XXL', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Set quần áo 7', 'Set quần áo 7', 'TƯ VẤN CHỌN SIZE', '900000', '4', '30', '70', 'M L XL XXL', 'black white');
INSERT INTO `universe`.`products` (`title`, `short_description`, `long_description`, `price`, `rating`, `quantity`, `quantity_buyed`, `size`, `color`) VALUES ('Set quần áo 8', 'Set quần áo 8', 'TƯ VẤN CHỌN SIZE', '1000000', '4', '20', '80', 'M L XL XXL', 'black white');
-- đẩy dữ liệu vào bảng ProductImages
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/dày_dép_1.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '1');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/dày_dép_2.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '2');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/dày_dép_3.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '3');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/dày_dép_4.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '4');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/dày_dép_5.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '5');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/dày_dép_6.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '6');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/dày_dép_7.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '7');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/mũ_3.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '8');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/mũ_5.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '9');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/mũ_4.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '10');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/mũ_1.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '11');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/mũ_2.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '12');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/mũ_6.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '13');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/mũ_7.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '14');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/mũ_6.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '15');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/quần_áo_1.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '16');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/quần_áo_3.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '17');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/quần_áo_4.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '18');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/quần_áo_6.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '19');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/quần_áo_2.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '20');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/quần_áo_5.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '21');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/quần_áo_7.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '22');
INSERT INTO `universe`.`product_images` (`url`, `size`, `format`, `upload_date`, `product_id`) VALUES ('wwwroot/images/products/quần_áo_8.jfif', '151 kb', 'JFIF', '2023-12-03 20:11:21', '23');
-- đẩy dữ liệu vào bảng ProductCategories
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('1', '3');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('2', '3');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('3', '3');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('4', '3');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('5', '3');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('6', '3');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('7', '3');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('8', '2');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('9', '2');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('10', '2');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('11', '2');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('12', '2');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('13', '2');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('14', '2');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('15', '2');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('16', '1');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('17', '1');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('18', '1');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('19', '1');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('20', '1');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('21', '1');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('22', '1');
INSERT INTO `universe`.`product_categories` (`product_id`, `category_id`) VALUES ('23', '1');
