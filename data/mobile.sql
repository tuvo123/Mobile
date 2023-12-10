-- Tạo database
CREATE DATABASE webmobile;
go
-- Sử dụng database mobile
USE webmobile;
go
-- Tạo bảng taikhoan

CREATE TABLE departments (
    id INT,
    name VARCHAR(255) NOT NULL,
    created_at datetime,
    updated_at datetime,
	primary key (id)
);

CREATE TABLE users (
	id int,
    avatar VARCHAR(255),
    username VARCHAR(255),
    name VARCHAR(255),
    email VARCHAR(20),
    address VARCHAR(255),
    phone VARCHAR(255),
	password VARCHAR(255),
	created_at datetime,
    updated_at datetime,
	department_id int,
	primary key (id),
	FOREIGN KEY (department_id) REFERENCES departments(id)
);
CREATE TABLE trademark (
    id INT,
    name VARCHAR(255) UNIQUE NOT NULL,
    parent_id INT NULL,
    note VARCHAR(255) NULL,
    avatar VARCHAR(255) NULL,
    created_at datetime,
    updated_at datetime,
	primary key (id)
);

CREATE TABLE post (
    id INT,
    title VARCHAR(255) UNIQUE NOT NULL,
    avatar VARCHAR(255) NULL,
    content TEXT NOT NULL,
    user_id INT NOT NULL,
    created_at datetime,
    updated_at datetime,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
-- Tạo bảng sanpham
CREATE TABLE sanpham (
    id int,
	trademark_id int,
    tensp VARCHAR(255),
    dungluong1 VARCHAR(50),
    gia1 VARCHAR(20),
    dungluong2 VARCHAR(50),
    gia2 VARCHAR(20),
    dungluong3 VARCHAR(50),
    gia3 VARCHAR(20),
    dungluong4 VARCHAR(50),
    gia4 VARCHAR(20),
    mota TEXT,
    baohanh VARCHAR(50),
    ram1 VARCHAR(20),
    ram2 VARCHAR(20),
    ram3 VARCHAR(20),
    ram4 VARCHAR(20),
	created_at datetime,
    updated_at datetime,
	primary key (id),
	FOREIGN KEY (trademark_id) REFERENCES trademark(id)
);
-- Tạo bảng bonho
CREATE TABLE bonho (
    id INT PRIMARY KEY,
    sanpham_id int,
    ram VARCHAR(20),
    danhba VARCHAR(255),
	FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);
CREATE TABLE camerasau (
    id INT PRIMARY KEY,
    sanpham_id int,
    dophangiai VARCHAR(20),
    quayphim VARCHAR(255),
    denflash VARCHAR(255),
    tinhnang VARCHAR(255),
	FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);
-- Tạo bảng cameratruoc
CREATE TABLE cameratruoc (
    id INT PRIMARY KEY,
    sanpham_id int,
    dophangiai VARCHAR(20),
    tinhnang VARCHAR(255),
	FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);

-- Tạo bảng giohang
CREATE TABLE giohang (
    id INT PRIMARY KEY,
    user_id INT,
    sanpham_id int,
    soluong VARCHAR(255),
    thanhtien VARCHAR(255),
    trangthai VARCHAR(50),
	FOREIGN KEY (user_id) REFERENCES users(id),
	 FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);
-- Tạo bảng hedieuhanh
CREATE TABLE hedieuhanh (
    id INT PRIMARY KEY,
    sanpham_id int,
    hedieuhanh VARCHAR(255),
    chipxuly VARCHAR(255),
    tocdocpu VARCHAR(20),
    chipdohoa VARCHAR(255),
	FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);
-- Tạo bảng hinhanh
CREATE TABLE hinhanh (
    id INT PRIMARY KEY,
    sanpham_id int,
    mau1 VARCHAR(50),
    hinh1_1 VARCHAR(255),
    hinh1_2 VARCHAR(255),
    hinh1_3 VARCHAR(255),
    hinh1_4 VARCHAR(255),
    mau2 VARCHAR(50),
    hinh2_1 VARCHAR(255),
    hinh2_2 VARCHAR(255),
    hinh2_3 VARCHAR(255),
    hinh2_4 VARCHAR(255),
    mau3 VARCHAR(50),
    hinh3_1 VARCHAR(255),
    hinh3_2 VARCHAR(255),
    hinh3_3 VARCHAR(255),
    hinh3_4 VARCHAR(255),
    mau4 VARCHAR(50),
    hinh4_1 VARCHAR(255),
    hinh4_2 VARCHAR(255),
    hinh4_3 VARCHAR(255),
    hinh4_4 VARCHAR(255),
	FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);

-- Tạo bảng ketnoi
CREATE TABLE ketnoi (
    id INT PRIMARY KEY,
    sanpham_id int,
    mangdidong VARCHAR(255),
    thesim VARCHAR(255),
    wifi VARCHAR(255),
    gps VARCHAR(255),
    bluetooth VARCHAR(255),
    congsac VARCHAR(255),
    tainghe VARCHAR(255),
	FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);

-- Tạo bảng manhinh
CREATE TABLE manhinh (
    id INT PRIMARY KEY,
    sanpham_id int,
    congnghe VARCHAR(255),
    dophangiai VARCHAR(255),
    mahinhtrong VARCHAR(255),
    dosangtoida VARCHAR(255),
    matkinhcamung VARCHAR(255),
	FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);

-- Tạo bảng pin
CREATE TABLE pin (
    id INT PRIMARY KEY,
    sanpham_id int,
    loaipin VARCHAR(255),
    dungluongpin VARCHAR(255),
    hotrosactoida VARCHAR(255),
    congnghepin VARCHAR(255),
	FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);

-- Tạo bảng thongtinchung
CREATE TABLE thongtinchung (
    id INT PRIMARY KEY,
    sanpham_id int,
    thietke VARCHAR(255),
    chatlieu VARCHAR(255),
    kichthuockhoiluong VARCHAR(255),
    thoidiemramat VARCHAR(255),
	 FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);

-- Tạo bảng tienich
CREATE TABLE tienich (
    id INT PRIMARY KEY,
    sanpham_id int,
    baomatnangcao VARCHAR(255),
    tinhnangdacbiet VARCHAR(255),
    khangnuocvabui VARCHAR(255),
    ghiam VARCHAR(255),
    xemphim VARCHAR(255),
    nghenhac VARCHAR(255),
	 FOREIGN KEY (sanpham_id) REFERENCES sanpham(id)
);

create table hoadonban(
	id int,
	user_id int,
	admin_id int,
	tongtien VARCHAR(255),
	created_at datetime,
    updated_at datetime,
	trangthai varchar(255),
	primary key (id),
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (admin_id) REFERENCES users(id)
);

create table chitiet_hdonban(
	id int primary key,
	mahdban int,
	sanpham_id int,
	soluongban VARCHAR(255),
	dongia VARCHAR(255),
	giamgia VARCHAR(255),
	thanhtien VARCHAR(255),
	FOREIGN KEY (sanpham_id) REFERENCES sanpham(id),
	FOREIGN KEY (mahdban) REFERENCES hoadonban(id)
);

create table hoadonmua(
	id int,
	department_id int,
	user_id int,
	created_at datetime,
    updated_at datetime,
	tongtien VARCHAR(255),
	primary key (id),
	FOREIGN KEY (department_id) REFERENCES departments(id),
	FOREIGN KEY (user_id) REFERENCES users(id)
);
create table chitiet_hdonmua(
	id int primary key,
	mahdmua int,
	sanpham_id int,
	soluongmua VARCHAR(255),
	giamua VARCHAR(255),
	giamgia VARCHAR(255),
	thanhtien VARCHAR(255),
	FOREIGN KEY (sanpham_id) REFERENCES sanpham(id),
	FOREIGN KEY (mahdmua) REFERENCES hoadonmua(id)
);






