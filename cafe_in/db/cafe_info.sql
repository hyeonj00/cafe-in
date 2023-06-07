CREATE TABLE `cafe_info` (
  `own_id` char(15) NOT NULL,
  `name` char(15) NOT NULL,
  `phone` char(20) NOT NULL,
  `address` char(100) NOT NULL,
  `regist_day` char(20) DEFAULT NULL,
  `stamp` varchar(100) NOT NULL DEFAULT 'img_stamp2.png',
  `stampbook` varchar(100) NOT NULL DEFAULT 'img_stamp.png',
  `coupon` varchar(100) NOT NULL DEFAULT 'coupon1.png',
  `coupon_detail` varchar(100) NOT NULL DEFAULT 'coupon1_1.png'
    primary key(own_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into cafe_info (own_id, name, phone, address, regist_day, stamp, stampbook, coupon, coupon_detail)
    values("owner1", "카페365", "054-555-5555", "경북 안동시 송천1길 138-8", "2023-04-16 (12:34)", "img_stamp2.png", "img_stamp.png", "coupon1.png", "coupon1_1.png");
insert into cafe_info (own_id, name, phone, address, regist_day, stamp, stampbook, coupon, coupon_detail)
    values("owner2", "별다방", "054-555-5555", "경북 안동시 송천1길 140", "2023-04-16 (12:34)", "img_stamp2.png", "img_stamp.png", "coupon1.png", "coupon1_1.png");
insert into cafe_info (own_id, name, phone, address, regist_day, stamp, stampbook, coupon, coupon_detail)
    values("owner3", "더소아즈커피", "054-555-5555", "경북 안동시 송천1길 146-7", "2023-04-16 (12:34)", "img_stamp2.png", "img_stamp.png", "coupon1.png", "coupon1_1.png");
insert into cafe_info (own_id, name, phone, address, regist_day, stamp, stampbook, coupon, coupon_detail)
    values("owner4", "Juicy", "054-555-5555", "경북 안동시 송천1길 146-16", "2023-05-30 (08:29)", "img_stamp2.png", "img_stamp.png", "coupon1.png", "coupon1_1.png");   
