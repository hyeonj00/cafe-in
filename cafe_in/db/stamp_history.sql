create table stamp_history (
    num int(5) not null AUTO_INCREMENT,
    id char(15) not null,
    cafe_name char(20) not null,
    title char(15) not null,
    regist_day char(20) not null,
    count char(10) not null,
    primary key(num)
);


# mem_id : test, own_id : owner1, 스탬프 5개, 쿠폰 1개
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 쿠폰전환", "카페365", "2023-05-22", "-10");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "쿠폰 교환", "카페365", "2023-05-23", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "카페365", "2023-05-21", "+1");

# mem_id : test, own_id : owner2, 스탬프 6개
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "별다방", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "별다방", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "별다방", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "별다방", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "별다방", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "별다방", "2023-05-25", "+1");

# mem_id : test, own_id : owner3, 스탬프 1개
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "더소아즈커피", "2023-05-25", "+1");

# mem_id : test, own_id : owner4, 스탬프 2개, 쿠폰 2개
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 쿠폰전환", "Juicy", "2023-05-22", "-10");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "쿠폰 교환", "Juicy", "2023-05-23", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 쿠폰전환", "Juicy", "2023-05-22", "-10");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "쿠폰 교환", "Juicy", "2023-05-23", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");
insert into stamp_history (id, title, cafe_name, regist_day, count) values ("test", "스탬프 적립", "Juicy", "2023-05-25", "+1");