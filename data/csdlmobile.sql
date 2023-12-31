PGDMP     (    ;                {         	   webmobile    15.4    15.4 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    17387 	   webmobile    DATABASE     �   CREATE DATABASE webmobile WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
    DROP DATABASE webmobile;
                postgres    false            �            1259    17449    bonho    TABLE     �   CREATE TABLE public.bonho (
    id integer NOT NULL,
    sanpham_id integer,
    ram character varying(20),
    danhba character varying(255)
);
    DROP TABLE public.bonho;
       public         heap    postgres    false            �            1259    17448    bonho_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bonho_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.bonho_id_seq;
       public          postgres    false    225            �           0    0    bonho_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.bonho_id_seq OWNED BY public.bonho.id;
          public          postgres    false    224            �            1259    17461 	   camerasau    TABLE     �   CREATE TABLE public.camerasau (
    id integer NOT NULL,
    sanpham_id integer,
    cs_dophangiai text,
    quayphim character varying(255),
    denflash character varying(255),
    cs_tinhnang text
);
    DROP TABLE public.camerasau;
       public         heap    postgres    false            �            1259    17460    camerasau_id_seq    SEQUENCE     �   CREATE SEQUENCE public.camerasau_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.camerasau_id_seq;
       public          postgres    false    227            �           0    0    camerasau_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.camerasau_id_seq OWNED BY public.camerasau.id;
          public          postgres    false    226            �            1259    17475    cameratruoc    TABLE     �   CREATE TABLE public.cameratruoc (
    id integer NOT NULL,
    sanpham_id integer,
    ct_dophangiai character varying(20),
    ct_tinhnang text
);
    DROP TABLE public.cameratruoc;
       public         heap    postgres    false            �            1259    17474    cameratruoc_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cameratruoc_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.cameratruoc_id_seq;
       public          postgres    false    229            �           0    0    cameratruoc_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.cameratruoc_id_seq OWNED BY public.cameratruoc.id;
          public          postgres    false    228            �            1259    17623    chitiet_hdonban    TABLE       CREATE TABLE public.chitiet_hdonban (
    id integer NOT NULL,
    mahdban integer,
    sanpham_id integer,
    soluongban character varying(255),
    dongia character varying(255),
    giamgia character varying(255),
    thanhtien character varying(255),
    order_code integer
);
 #   DROP TABLE public.chitiet_hdonban;
       public         heap    postgres    false            �            1259    17622    chitiet_hdonban_id_seq    SEQUENCE     �   CREATE SEQUENCE public.chitiet_hdonban_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.chitiet_hdonban_id_seq;
       public          postgres    false    249            �           0    0    chitiet_hdonban_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.chitiet_hdonban_id_seq OWNED BY public.chitiet_hdonban.id;
          public          postgres    false    248            �            1259    17659    chitiet_hdonmua    TABLE       CREATE TABLE public.chitiet_hdonmua (
    id integer NOT NULL,
    mahdmua integer,
    sanpham_id integer,
    soluongmua character varying(255),
    giamua character varying(255),
    giamgia character varying(255),
    thanhtien character varying(255)
);
 #   DROP TABLE public.chitiet_hdonmua;
       public         heap    postgres    false            �            1259    17658    chitiet_hdonmua_id_seq    SEQUENCE     �   CREATE SEQUENCE public.chitiet_hdonmua_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.chitiet_hdonmua_id_seq;
       public          postgres    false    253            �           0    0    chitiet_hdonmua_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.chitiet_hdonmua_id_seq OWNED BY public.chitiet_hdonmua.id;
          public          postgres    false    252            �            1259    17389    departments    TABLE     �   CREATE TABLE public.departments (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.departments;
       public         heap    postgres    false            �            1259    17388    departments_id_seq    SEQUENCE     �   CREATE SEQUENCE public.departments_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.departments_id_seq;
       public          postgres    false    215            �           0    0    departments_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.departments_id_seq OWNED BY public.departments.id;
          public          postgres    false    214            �            1259    17678    dulieu    TABLE     i  CREATE TABLE public.dulieu (
    id integer NOT NULL,
    name text,
    dungluong1 text,
    ram1 text,
    gia1 text,
    dungluong2 text,
    ram2 text,
    gia2 text,
    dungluong3 text,
    ram3 text,
    gia3 text,
    dungluong4 text,
    ram4 text,
    gia4 text,
    thuonghieu text,
    anh text,
    mau1 text,
    mau2 text,
    mau3 text,
    mau4 text,
    anh1 text,
    anh2 text,
    anh3 text,
    anh4 text,
    anh5 text,
    anh6 text,
    anh7 text,
    anh8 text,
    anh9 text,
    anh10 text,
    anh11 text,
    anh12 text,
    anh13 text,
    anh14 text,
    anh15 text,
    anh16 text,
    thongtinsp text,
    baohanh text,
    phukien text,
    mh_congnghemanhinh text,
    mh_dophangiai text,
    mh_manhinhrong text,
    mh_dosangtoida text,
    mh_mankinhcamung text,
    cs_dophangiai text,
    cs_quayphim text,
    cs_denflask text,
    cs_tinhnang text,
    ct_dophangia text,
    ct_tinhnang text,
    cpu_hedieuhanh text,
    cpu_chipxuly text,
    cpu_tocdo text,
    cpu_chipdohoa text,
    bn_ram text,
    bn_dungluong text,
    bn_dungluongkhadung text,
    bn_danhba text,
    kn_mangdidong text,
    kn_sim text,
    kn_wifi text,
    kn_gps text,
    kn_bluetooth text,
    kn_sac text,
    kn_jacktainghe text,
    kn_knkhac text,
    pin_dungluongpin text,
    pin_loaipin text,
    pin_hotrosac text,
    pin_sackem text,
    pin_congnghepin text,
    ti_baomat text,
    ti_tinhnangdacbiet text,
    ti_khangnuoc text,
    ti_ghiam text,
    ti_xemphim text,
    ti_nghenhac text,
    ttc_thietke text,
    ttc_chatlieu text,
    ttc_kichthuockhoiluong text,
    ttc_thoidiemramat text
);
    DROP TABLE public.dulieu;
       public         heap    postgres    false            �            1259    17683    dulieu_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dulieu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.dulieu_id_seq;
       public          postgres    false    254            �           0    0    dulieu_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.dulieu_id_seq OWNED BY public.dulieu.id;
          public          postgres    false    255            �            1259    17487    giohang    TABLE     �   CREATE TABLE public.giohang (
    id integer NOT NULL,
    user_id integer,
    sanpham_id integer,
    soluong character varying(255),
    thanhtien character varying(255),
    trangthai character varying(50),
    dungluong text,
    mau text
);
    DROP TABLE public.giohang;
       public         heap    postgres    false            �            1259    17486    giohang_id_seq    SEQUENCE     �   CREATE SEQUENCE public.giohang_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.giohang_id_seq;
       public          postgres    false    231            �           0    0    giohang_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.giohang_id_seq OWNED BY public.giohang.id;
          public          postgres    false    230            �            1259    17506 
   hedieuhanh    TABLE     �   CREATE TABLE public.hedieuhanh (
    id integer NOT NULL,
    sanpham_id integer,
    hedieuhanh character varying(255),
    chipxuly character varying(255),
    tocdocpu character varying(255),
    chipdohoa character varying(255)
);
    DROP TABLE public.hedieuhanh;
       public         heap    postgres    false            �            1259    17505    hedieuhanh_id_seq    SEQUENCE     �   CREATE SEQUENCE public.hedieuhanh_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.hedieuhanh_id_seq;
       public          postgres    false    233            �           0    0    hedieuhanh_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.hedieuhanh_id_seq OWNED BY public.hedieuhanh.id;
          public          postgres    false    232            �            1259    17520    hinhanh    TABLE     �  CREATE TABLE public.hinhanh (
    id integer NOT NULL,
    sanpham_id integer,
    mau1 character varying(50),
    hinh1_1 character varying(255),
    hinh1_2 character varying(255),
    hinh1_3 character varying(255),
    hinh1_4 character varying(255),
    mau2 character varying(50),
    hinh2_1 character varying(255),
    hinh2_2 character varying(255),
    hinh2_3 character varying(255),
    hinh2_4 character varying(255),
    mau3 character varying(50),
    hinh3_1 character varying(255),
    hinh3_2 character varying(255),
    hinh3_3 character varying(255),
    hinh3_4 character varying(255),
    mau4 character varying(50),
    hinh4_1 character varying(255),
    hinh4_2 character varying(255),
    hinh4_3 character varying(255),
    hinh4_4 character varying(255),
    hinh1_0 text,
    hinh2_0 text,
    hinh3_0 text,
    hinh4_0 text,
    hinh0_1 text,
    hinh0_2 text,
    hinh0_3 text,
    hinh0_4 text
);
    DROP TABLE public.hinhanh;
       public         heap    postgres    false            �            1259    17519    hinhanh_id_seq    SEQUENCE     �   CREATE SEQUENCE public.hinhanh_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.hinhanh_id_seq;
       public          postgres    false    235            �           0    0    hinhanh_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.hinhanh_id_seq OWNED BY public.hinhanh.id;
          public          postgres    false    234            �            1259    17604 	   hoadonban    TABLE     b  CREATE TABLE public.hoadonban (
    id integer NOT NULL,
    user_id integer,
    admin_id integer,
    tongtien character varying(255),
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    trangthai character varying(255),
    order_code integer,
    product_id integer,
    quantity integer,
    price integer
);
    DROP TABLE public.hoadonban;
       public         heap    postgres    false            �            1259    17603    hoadonban_id_seq    SEQUENCE     �   CREATE SEQUENCE public.hoadonban_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.hoadonban_id_seq;
       public          postgres    false    247            �           0    0    hoadonban_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.hoadonban_id_seq OWNED BY public.hoadonban.id;
          public          postgres    false    246            �            1259    17642 	   hoadonmua    TABLE     �   CREATE TABLE public.hoadonmua (
    id integer NOT NULL,
    department_id integer,
    user_id integer,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    tongtien character varying(255)
);
    DROP TABLE public.hoadonmua;
       public         heap    postgres    false            �            1259    17641    hoadonmua_id_seq    SEQUENCE     �   CREATE SEQUENCE public.hoadonmua_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.hoadonmua_id_seq;
       public          postgres    false    251            �           0    0    hoadonmua_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.hoadonmua_id_seq OWNED BY public.hoadonmua.id;
          public          postgres    false    250            �            1259    17534    ketnoi    TABLE     I  CREATE TABLE public.ketnoi (
    id integer NOT NULL,
    sanpham_id integer,
    mangdidong character varying(255),
    thesim character varying(255),
    wifi character varying(255),
    gps character varying(255),
    bluetooth character varying(255),
    congsac character varying(255),
    tainghe character varying(255)
);
    DROP TABLE public.ketnoi;
       public         heap    postgres    false            �            1259    17533    ketnoi_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ketnoi_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.ketnoi_id_seq;
       public          postgres    false    237            �           0    0    ketnoi_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.ketnoi_id_seq OWNED BY public.ketnoi.id;
          public          postgres    false    236            �            1259    17548    manhinh    TABLE       CREATE TABLE public.manhinh (
    id integer NOT NULL,
    sanpham_id integer,
    congnghe character varying(255),
    mh_dophangiai character varying(255),
    mahinhtrong character varying(255),
    dosangtoida character varying(255),
    matkinhcamung character varying(255)
);
    DROP TABLE public.manhinh;
       public         heap    postgres    false            �            1259    17547    manhinh_id_seq    SEQUENCE     �   CREATE SEQUENCE public.manhinh_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.manhinh_id_seq;
       public          postgres    false    239            �           0    0    manhinh_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.manhinh_id_seq OWNED BY public.manhinh.id;
          public          postgres    false    238            �            1259    17562    pin    TABLE     �   CREATE TABLE public.pin (
    id integer NOT NULL,
    sanpham_id integer,
    loaipin character varying(255),
    dungluongpin character varying(255),
    hotrosactoida character varying(255),
    congnghepin character varying(255)
);
    DROP TABLE public.pin;
       public         heap    postgres    false            �            1259    17561 
   pin_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pin_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.pin_id_seq;
       public          postgres    false    241            �           0    0 
   pin_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.pin_id_seq OWNED BY public.pin.id;
          public          postgres    false    240            �            1259    17421    post    TABLE       CREATE TABLE public.post (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    avatar character varying(255),
    content text NOT NULL,
    user_id integer NOT NULL,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.post;
       public         heap    postgres    false            �            1259    17420    post_id_seq    SEQUENCE     �   CREATE SEQUENCE public.post_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.post_id_seq;
       public          postgres    false    221            �           0    0    post_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.post_id_seq OWNED BY public.post.id;
          public          postgres    false    220            �            1259    17435    sanpham    TABLE     �  CREATE TABLE public.sanpham (
    id integer NOT NULL,
    trademark_id integer,
    tensp character varying(255),
    dungluong1 character varying(50),
    gia1 character varying(20),
    dungluong2 character varying(50),
    gia2 character varying(20),
    dungluong3 character varying(50),
    gia3 character varying(20),
    dungluong4 character varying(50),
    gia4 character varying(20),
    mota text,
    baohanh character varying(50),
    ram1 character varying(20),
    ram2 character varying(20),
    ram3 character varying(20),
    ram4 character varying(20),
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    img_main character varying(255),
    type integer,
    ttsanpham text,
    thuonghieu text
);
    DROP TABLE public.sanpham;
       public         heap    postgres    false            �            1259    17434    sanpham_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sanpham_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.sanpham_id_seq;
       public          postgres    false    223            �           0    0    sanpham_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.sanpham_id_seq OWNED BY public.sanpham.id;
          public          postgres    false    222            �            1259    17576    thongtinchung    TABLE     �   CREATE TABLE public.thongtinchung (
    id integer NOT NULL,
    sanpham_id integer,
    thietke character varying(255),
    chatlieu character varying(255),
    kichthuockhoiluong character varying(255),
    thoidiemramat character varying(255)
);
 !   DROP TABLE public.thongtinchung;
       public         heap    postgres    false            �            1259    17575    thongtinchung_id_seq    SEQUENCE     �   CREATE SEQUENCE public.thongtinchung_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.thongtinchung_id_seq;
       public          postgres    false    243            �           0    0    thongtinchung_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.thongtinchung_id_seq OWNED BY public.thongtinchung.id;
          public          postgres    false    242            �            1259    17590    tienich    TABLE     +  CREATE TABLE public.tienich (
    id integer NOT NULL,
    sanpham_id integer,
    baomatnangcao character varying(255),
    tinhnangdacbiet text,
    khangnuocvabui character varying(255),
    ghiam character varying(255),
    xemphim character varying(255),
    nghenhac character varying(255)
);
    DROP TABLE public.tienich;
       public         heap    postgres    false            �            1259    17589    tienich_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tienich_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.tienich_id_seq;
       public          postgres    false    245            �           0    0    tienich_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.tienich_id_seq OWNED BY public.tienich.id;
          public          postgres    false    244            �            1259    17410 	   trademark    TABLE       CREATE TABLE public.trademark (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    parent_id integer,
    note character varying(255),
    avatar character varying(255),
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.trademark;
       public         heap    postgres    false            �            1259    17409    trademark_id_seq    SEQUENCE     �   CREATE SEQUENCE public.trademark_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.trademark_id_seq;
       public          postgres    false    219            �           0    0    trademark_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.trademark_id_seq OWNED BY public.trademark.id;
          public          postgres    false    218            �            1259    17396    users    TABLE     �  CREATE TABLE public.users (
    id integer NOT NULL,
    avatar character varying(255),
    username character varying(255),
    name character varying(255),
    email character varying(50),
    address character varying(255),
    phone character varying(255),
    password character varying(255),
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    department_id integer
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    17395    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    217            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    216            �           2604    17452    bonho id    DEFAULT     d   ALTER TABLE ONLY public.bonho ALTER COLUMN id SET DEFAULT nextval('public.bonho_id_seq'::regclass);
 7   ALTER TABLE public.bonho ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224    225            �           2604    17464    camerasau id    DEFAULT     l   ALTER TABLE ONLY public.camerasau ALTER COLUMN id SET DEFAULT nextval('public.camerasau_id_seq'::regclass);
 ;   ALTER TABLE public.camerasau ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226    227            �           2604    17478    cameratruoc id    DEFAULT     p   ALTER TABLE ONLY public.cameratruoc ALTER COLUMN id SET DEFAULT nextval('public.cameratruoc_id_seq'::regclass);
 =   ALTER TABLE public.cameratruoc ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    229    229            �           2604    17626    chitiet_hdonban id    DEFAULT     x   ALTER TABLE ONLY public.chitiet_hdonban ALTER COLUMN id SET DEFAULT nextval('public.chitiet_hdonban_id_seq'::regclass);
 A   ALTER TABLE public.chitiet_hdonban ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    249    248    249            �           2604    17662    chitiet_hdonmua id    DEFAULT     x   ALTER TABLE ONLY public.chitiet_hdonmua ALTER COLUMN id SET DEFAULT nextval('public.chitiet_hdonmua_id_seq'::regclass);
 A   ALTER TABLE public.chitiet_hdonmua ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    252    253    253            �           2604    17392    departments id    DEFAULT     p   ALTER TABLE ONLY public.departments ALTER COLUMN id SET DEFAULT nextval('public.departments_id_seq'::regclass);
 =   ALTER TABLE public.departments ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214    215            �           2604    17684 	   dulieu id    DEFAULT     f   ALTER TABLE ONLY public.dulieu ALTER COLUMN id SET DEFAULT nextval('public.dulieu_id_seq'::regclass);
 8   ALTER TABLE public.dulieu ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    255    254            �           2604    17490 
   giohang id    DEFAULT     h   ALTER TABLE ONLY public.giohang ALTER COLUMN id SET DEFAULT nextval('public.giohang_id_seq'::regclass);
 9   ALTER TABLE public.giohang ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    230    231    231            �           2604    17509    hedieuhanh id    DEFAULT     n   ALTER TABLE ONLY public.hedieuhanh ALTER COLUMN id SET DEFAULT nextval('public.hedieuhanh_id_seq'::regclass);
 <   ALTER TABLE public.hedieuhanh ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    232    233            �           2604    17523 
   hinhanh id    DEFAULT     h   ALTER TABLE ONLY public.hinhanh ALTER COLUMN id SET DEFAULT nextval('public.hinhanh_id_seq'::regclass);
 9   ALTER TABLE public.hinhanh ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    234    235            �           2604    17607    hoadonban id    DEFAULT     l   ALTER TABLE ONLY public.hoadonban ALTER COLUMN id SET DEFAULT nextval('public.hoadonban_id_seq'::regclass);
 ;   ALTER TABLE public.hoadonban ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    246    247    247            �           2604    17645    hoadonmua id    DEFAULT     l   ALTER TABLE ONLY public.hoadonmua ALTER COLUMN id SET DEFAULT nextval('public.hoadonmua_id_seq'::regclass);
 ;   ALTER TABLE public.hoadonmua ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    250    251    251            �           2604    17537 	   ketnoi id    DEFAULT     f   ALTER TABLE ONLY public.ketnoi ALTER COLUMN id SET DEFAULT nextval('public.ketnoi_id_seq'::regclass);
 8   ALTER TABLE public.ketnoi ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    236    237    237            �           2604    17551 
   manhinh id    DEFAULT     h   ALTER TABLE ONLY public.manhinh ALTER COLUMN id SET DEFAULT nextval('public.manhinh_id_seq'::regclass);
 9   ALTER TABLE public.manhinh ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    238    239    239            �           2604    17565    pin id    DEFAULT     `   ALTER TABLE ONLY public.pin ALTER COLUMN id SET DEFAULT nextval('public.pin_id_seq'::regclass);
 5   ALTER TABLE public.pin ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    240    241    241            �           2604    17424    post id    DEFAULT     b   ALTER TABLE ONLY public.post ALTER COLUMN id SET DEFAULT nextval('public.post_id_seq'::regclass);
 6   ALTER TABLE public.post ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    221    221            �           2604    17438 
   sanpham id    DEFAULT     h   ALTER TABLE ONLY public.sanpham ALTER COLUMN id SET DEFAULT nextval('public.sanpham_id_seq'::regclass);
 9   ALTER TABLE public.sanpham ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222    223            �           2604    17579    thongtinchung id    DEFAULT     t   ALTER TABLE ONLY public.thongtinchung ALTER COLUMN id SET DEFAULT nextval('public.thongtinchung_id_seq'::regclass);
 ?   ALTER TABLE public.thongtinchung ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    242    243    243            �           2604    17593 
   tienich id    DEFAULT     h   ALTER TABLE ONLY public.tienich ALTER COLUMN id SET DEFAULT nextval('public.tienich_id_seq'::regclass);
 9   ALTER TABLE public.tienich ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    244    245    245            �           2604    17413    trademark id    DEFAULT     l   ALTER TABLE ONLY public.trademark ALTER COLUMN id SET DEFAULT nextval('public.trademark_id_seq'::regclass);
 ;   ALTER TABLE public.trademark ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    219    219            �           2604    17399    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    217    217            �          0    17449    bonho 
   TABLE DATA           <   COPY public.bonho (id, sanpham_id, ram, danhba) FROM stdin;
    public          postgres    false    225   [�       �          0    17461 	   camerasau 
   TABLE DATA           c   COPY public.camerasau (id, sanpham_id, cs_dophangiai, quayphim, denflash, cs_tinhnang) FROM stdin;
    public          postgres    false    227   ��       �          0    17475    cameratruoc 
   TABLE DATA           Q   COPY public.cameratruoc (id, sanpham_id, ct_dophangiai, ct_tinhnang) FROM stdin;
    public          postgres    false    229   ��       �          0    17623    chitiet_hdonban 
   TABLE DATA           v   COPY public.chitiet_hdonban (id, mahdban, sanpham_id, soluongban, dongia, giamgia, thanhtien, order_code) FROM stdin;
    public          postgres    false    249   [�       �          0    17659    chitiet_hdonmua 
   TABLE DATA           j   COPY public.chitiet_hdonmua (id, mahdmua, sanpham_id, soluongmua, giamua, giamgia, thanhtien) FROM stdin;
    public          postgres    false    253   ��       �          0    17389    departments 
   TABLE DATA           G   COPY public.departments (id, name, created_at, updated_at) FROM stdin;
    public          postgres    false    215   �       �          0    17678    dulieu 
   TABLE DATA           �  COPY public.dulieu (id, name, dungluong1, ram1, gia1, dungluong2, ram2, gia2, dungluong3, ram3, gia3, dungluong4, ram4, gia4, thuonghieu, anh, mau1, mau2, mau3, mau4, anh1, anh2, anh3, anh4, anh5, anh6, anh7, anh8, anh9, anh10, anh11, anh12, anh13, anh14, anh15, anh16, thongtinsp, baohanh, phukien, mh_congnghemanhinh, mh_dophangiai, mh_manhinhrong, mh_dosangtoida, mh_mankinhcamung, cs_dophangiai, cs_quayphim, cs_denflask, cs_tinhnang, ct_dophangia, ct_tinhnang, cpu_hedieuhanh, cpu_chipxuly, cpu_tocdo, cpu_chipdohoa, bn_ram, bn_dungluong, bn_dungluongkhadung, bn_danhba, kn_mangdidong, kn_sim, kn_wifi, kn_gps, kn_bluetooth, kn_sac, kn_jacktainghe, kn_knkhac, pin_dungluongpin, pin_loaipin, pin_hotrosac, pin_sackem, pin_congnghepin, ti_baomat, ti_tinhnangdacbiet, ti_khangnuoc, ti_ghiam, ti_xemphim, ti_nghenhac, ttc_thietke, ttc_chatlieu, ttc_kichthuockhoiluong, ttc_thoidiemramat) FROM stdin;
    public          postgres    false    254   B�       �          0    17487    giohang 
   TABLE DATA           i   COPY public.giohang (id, user_id, sanpham_id, soluong, thanhtien, trangthai, dungluong, mau) FROM stdin;
    public          postgres    false    231   �      �          0    17506 
   hedieuhanh 
   TABLE DATA           _   COPY public.hedieuhanh (id, sanpham_id, hedieuhanh, chipxuly, tocdocpu, chipdohoa) FROM stdin;
    public          postgres    false    233   u      �          0    17520    hinhanh 
   TABLE DATA           !  COPY public.hinhanh (id, sanpham_id, mau1, hinh1_1, hinh1_2, hinh1_3, hinh1_4, mau2, hinh2_1, hinh2_2, hinh2_3, hinh2_4, mau3, hinh3_1, hinh3_2, hinh3_3, hinh3_4, mau4, hinh4_1, hinh4_2, hinh4_3, hinh4_4, hinh1_0, hinh2_0, hinh3_0, hinh4_0, hinh0_1, hinh0_2, hinh0_3, hinh0_4) FROM stdin;
    public          postgres    false    235   	      �          0    17604 	   hoadonban 
   TABLE DATA           �   COPY public.hoadonban (id, user_id, admin_id, tongtien, created_at, updated_at, trangthai, order_code, product_id, quantity, price) FROM stdin;
    public          postgres    false    247   #      �          0    17642 	   hoadonmua 
   TABLE DATA           a   COPY public.hoadonmua (id, department_id, user_id, created_at, updated_at, tongtien) FROM stdin;
    public          postgres    false    251         �          0    17534    ketnoi 
   TABLE DATA           l   COPY public.ketnoi (id, sanpham_id, mangdidong, thesim, wifi, gps, bluetooth, congsac, tainghe) FROM stdin;
    public          postgres    false    237   i      �          0    17548    manhinh 
   TABLE DATA           s   COPY public.manhinh (id, sanpham_id, congnghe, mh_dophangiai, mahinhtrong, dosangtoida, matkinhcamung) FROM stdin;
    public          postgres    false    239   �      �          0    17562    pin 
   TABLE DATA           `   COPY public.pin (id, sanpham_id, loaipin, dungluongpin, hotrosactoida, congnghepin) FROM stdin;
    public          postgres    false    241   M      �          0    17421    post 
   TABLE DATA           [   COPY public.post (id, title, avatar, content, user_id, created_at, updated_at) FROM stdin;
    public          postgres    false    221   �      �          0    17435    sanpham 
   TABLE DATA           �   COPY public.sanpham (id, trademark_id, tensp, dungluong1, gia1, dungluong2, gia2, dungluong3, gia3, dungluong4, gia4, mota, baohanh, ram1, ram2, ram3, ram4, created_at, updated_at, img_main, type, ttsanpham, thuonghieu) FROM stdin;
    public          postgres    false    223   �      �          0    17576    thongtinchung 
   TABLE DATA           m   COPY public.thongtinchung (id, sanpham_id, thietke, chatlieu, kichthuockhoiluong, thoidiemramat) FROM stdin;
    public          postgres    false    243   �'      �          0    17590    tienich 
   TABLE DATA           {   COPY public.tienich (id, sanpham_id, baomatnangcao, tinhnangdacbiet, khangnuocvabui, ghiam, xemphim, nghenhac) FROM stdin;
    public          postgres    false    245   *+      �          0    17410 	   trademark 
   TABLE DATA           ^   COPY public.trademark (id, name, parent_id, note, avatar, created_at, updated_at) FROM stdin;
    public          postgres    false    219   M1      �          0    17396    users 
   TABLE DATA           �   COPY public.users (id, avatar, username, name, email, address, phone, password, created_at, updated_at, department_id) FROM stdin;
    public          postgres    false    217   F2      �           0    0    bonho_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.bonho_id_seq', 56, true);
          public          postgres    false    224            �           0    0    camerasau_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.camerasau_id_seq', 56, true);
          public          postgres    false    226            �           0    0    cameratruoc_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.cameratruoc_id_seq', 56, true);
          public          postgres    false    228            �           0    0    chitiet_hdonban_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.chitiet_hdonban_id_seq', 8, true);
          public          postgres    false    248            �           0    0    chitiet_hdonmua_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.chitiet_hdonmua_id_seq', 1, true);
          public          postgres    false    252            �           0    0    departments_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.departments_id_seq', 2, true);
          public          postgres    false    214            �           0    0    dulieu_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.dulieu_id_seq', 1, false);
          public          postgres    false    255            �           0    0    giohang_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.giohang_id_seq', 8, true);
          public          postgres    false    230            �           0    0    hedieuhanh_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.hedieuhanh_id_seq', 62, true);
          public          postgres    false    232            �           0    0    hinhanh_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.hinhanh_id_seq', 56, true);
          public          postgres    false    234            �           0    0    hoadonban_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.hoadonban_id_seq', 11, true);
          public          postgres    false    246            �           0    0    hoadonmua_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.hoadonmua_id_seq', 5, true);
          public          postgres    false    250                        0    0    ketnoi_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.ketnoi_id_seq', 56, true);
          public          postgres    false    236                       0    0    manhinh_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.manhinh_id_seq', 56, true);
          public          postgres    false    238                       0    0 
   pin_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.pin_id_seq', 56, true);
          public          postgres    false    240                       0    0    post_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.post_id_seq', 1, false);
          public          postgres    false    220                       0    0    sanpham_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.sanpham_id_seq', 56, true);
          public          postgres    false    222                       0    0    thongtinchung_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.thongtinchung_id_seq', 56, true);
          public          postgres    false    242                       0    0    tienich_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.tienich_id_seq', 60, true);
          public          postgres    false    244                       0    0    trademark_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.trademark_id_seq', 8, true);
          public          postgres    false    218                       0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 5, true);
          public          postgres    false    216            �           2606    17454    bonho bonho_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.bonho
    ADD CONSTRAINT bonho_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.bonho DROP CONSTRAINT bonho_pkey;
       public            postgres    false    225            �           2606    17468    camerasau camerasau_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.camerasau
    ADD CONSTRAINT camerasau_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.camerasau DROP CONSTRAINT camerasau_pkey;
       public            postgres    false    227            �           2606    17480    cameratruoc cameratruoc_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.cameratruoc
    ADD CONSTRAINT cameratruoc_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.cameratruoc DROP CONSTRAINT cameratruoc_pkey;
       public            postgres    false    229                       2606    17630 $   chitiet_hdonban chitiet_hdonban_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.chitiet_hdonban
    ADD CONSTRAINT chitiet_hdonban_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.chitiet_hdonban DROP CONSTRAINT chitiet_hdonban_pkey;
       public            postgres    false    249                       2606    17666 $   chitiet_hdonmua chitiet_hdonmua_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.chitiet_hdonmua
    ADD CONSTRAINT chitiet_hdonmua_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.chitiet_hdonmua DROP CONSTRAINT chitiet_hdonmua_pkey;
       public            postgres    false    253            �           2606    17394    departments departments_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.departments
    ADD CONSTRAINT departments_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.departments DROP CONSTRAINT departments_pkey;
       public            postgres    false    215            	           2606    17709    dulieu dulieu_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.dulieu
    ADD CONSTRAINT dulieu_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.dulieu DROP CONSTRAINT dulieu_pkey;
       public            postgres    false    254            �           2606    17494    giohang giohang_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.giohang
    ADD CONSTRAINT giohang_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.giohang DROP CONSTRAINT giohang_pkey;
       public            postgres    false    231            �           2606    17513    hedieuhanh hedieuhanh_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.hedieuhanh
    ADD CONSTRAINT hedieuhanh_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.hedieuhanh DROP CONSTRAINT hedieuhanh_pkey;
       public            postgres    false    233            �           2606    17527    hinhanh hinhanh_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.hinhanh
    ADD CONSTRAINT hinhanh_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.hinhanh DROP CONSTRAINT hinhanh_pkey;
       public            postgres    false    235                       2606    17611    hoadonban hoadonban_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.hoadonban
    ADD CONSTRAINT hoadonban_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.hoadonban DROP CONSTRAINT hoadonban_pkey;
       public            postgres    false    247                       2606    17647    hoadonmua hoadonmua_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.hoadonmua
    ADD CONSTRAINT hoadonmua_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.hoadonmua DROP CONSTRAINT hoadonmua_pkey;
       public            postgres    false    251            �           2606    17541    ketnoi ketnoi_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.ketnoi
    ADD CONSTRAINT ketnoi_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.ketnoi DROP CONSTRAINT ketnoi_pkey;
       public            postgres    false    237            �           2606    17555    manhinh manhinh_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.manhinh
    ADD CONSTRAINT manhinh_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.manhinh DROP CONSTRAINT manhinh_pkey;
       public            postgres    false    239            �           2606    17569    pin pin_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY public.pin
    ADD CONSTRAINT pin_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.pin DROP CONSTRAINT pin_pkey;
       public            postgres    false    241            �           2606    17428    post post_title_key 
   CONSTRAINT     O   ALTER TABLE ONLY public.post
    ADD CONSTRAINT post_title_key UNIQUE (title);
 =   ALTER TABLE ONLY public.post DROP CONSTRAINT post_title_key;
       public            postgres    false    221            �           2606    17442    sanpham sanpham_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.sanpham
    ADD CONSTRAINT sanpham_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.sanpham DROP CONSTRAINT sanpham_pkey;
       public            postgres    false    223            �           2606    17583     thongtinchung thongtinchung_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.thongtinchung
    ADD CONSTRAINT thongtinchung_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.thongtinchung DROP CONSTRAINT thongtinchung_pkey;
       public            postgres    false    243            �           2606    17597    tienich tienich_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.tienich
    ADD CONSTRAINT tienich_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.tienich DROP CONSTRAINT tienich_pkey;
       public            postgres    false    245            �           2606    17419    trademark trademark_name_key 
   CONSTRAINT     W   ALTER TABLE ONLY public.trademark
    ADD CONSTRAINT trademark_name_key UNIQUE (name);
 F   ALTER TABLE ONLY public.trademark DROP CONSTRAINT trademark_name_key;
       public            postgres    false    219            �           2606    17417    trademark trademark_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.trademark
    ADD CONSTRAINT trademark_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.trademark DROP CONSTRAINT trademark_pkey;
       public            postgres    false    219            �           2606    17403    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    217                       2606    17455    bonho bonho_sanpham_id_fkey    FK CONSTRAINT        ALTER TABLE ONLY public.bonho
    ADD CONSTRAINT bonho_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 E   ALTER TABLE ONLY public.bonho DROP CONSTRAINT bonho_sanpham_id_fkey;
       public          postgres    false    225    3305    223                       2606    17469 #   camerasau camerasau_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.camerasau
    ADD CONSTRAINT camerasau_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 M   ALTER TABLE ONLY public.camerasau DROP CONSTRAINT camerasau_sanpham_id_fkey;
       public          postgres    false    227    3305    223                       2606    17481 '   cameratruoc cameratruoc_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.cameratruoc
    ADD CONSTRAINT cameratruoc_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 Q   ALTER TABLE ONLY public.cameratruoc DROP CONSTRAINT cameratruoc_sanpham_id_fkey;
       public          postgres    false    229    3305    223                       2606    17636 ,   chitiet_hdonban chitiet_hdonban_mahdban_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.chitiet_hdonban
    ADD CONSTRAINT chitiet_hdonban_mahdban_fkey FOREIGN KEY (mahdban) REFERENCES public.hoadonban(id);
 V   ALTER TABLE ONLY public.chitiet_hdonban DROP CONSTRAINT chitiet_hdonban_mahdban_fkey;
       public          postgres    false    247    249    3329                       2606    17631 /   chitiet_hdonban chitiet_hdonban_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.chitiet_hdonban
    ADD CONSTRAINT chitiet_hdonban_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 Y   ALTER TABLE ONLY public.chitiet_hdonban DROP CONSTRAINT chitiet_hdonban_sanpham_id_fkey;
       public          postgres    false    223    249    3305                       2606    17672 ,   chitiet_hdonmua chitiet_hdonmua_mahdmua_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.chitiet_hdonmua
    ADD CONSTRAINT chitiet_hdonmua_mahdmua_fkey FOREIGN KEY (mahdmua) REFERENCES public.hoadonmua(id);
 V   ALTER TABLE ONLY public.chitiet_hdonmua DROP CONSTRAINT chitiet_hdonmua_mahdmua_fkey;
       public          postgres    false    253    251    3333                        2606    17667 /   chitiet_hdonmua chitiet_hdonmua_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.chitiet_hdonmua
    ADD CONSTRAINT chitiet_hdonmua_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 Y   ALTER TABLE ONLY public.chitiet_hdonmua DROP CONSTRAINT chitiet_hdonmua_sanpham_id_fkey;
       public          postgres    false    223    3305    253                       2606    17500    giohang giohang_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.giohang
    ADD CONSTRAINT giohang_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 I   ALTER TABLE ONLY public.giohang DROP CONSTRAINT giohang_sanpham_id_fkey;
       public          postgres    false    3305    223    231                       2606    17495    giohang giohang_user_id_fkey    FK CONSTRAINT     {   ALTER TABLE ONLY public.giohang
    ADD CONSTRAINT giohang_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);
 F   ALTER TABLE ONLY public.giohang DROP CONSTRAINT giohang_user_id_fkey;
       public          postgres    false    3297    231    217                       2606    17514 %   hedieuhanh hedieuhanh_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.hedieuhanh
    ADD CONSTRAINT hedieuhanh_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 O   ALTER TABLE ONLY public.hedieuhanh DROP CONSTRAINT hedieuhanh_sanpham_id_fkey;
       public          postgres    false    223    233    3305                       2606    17528    hinhanh hinhanh_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.hinhanh
    ADD CONSTRAINT hinhanh_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 I   ALTER TABLE ONLY public.hinhanh DROP CONSTRAINT hinhanh_sanpham_id_fkey;
       public          postgres    false    235    3305    223                       2606    17617 !   hoadonban hoadonban_admin_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.hoadonban
    ADD CONSTRAINT hoadonban_admin_id_fkey FOREIGN KEY (admin_id) REFERENCES public.users(id);
 K   ALTER TABLE ONLY public.hoadonban DROP CONSTRAINT hoadonban_admin_id_fkey;
       public          postgres    false    247    3297    217                       2606    17612     hoadonban hoadonban_user_id_fkey    FK CONSTRAINT        ALTER TABLE ONLY public.hoadonban
    ADD CONSTRAINT hoadonban_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);
 J   ALTER TABLE ONLY public.hoadonban DROP CONSTRAINT hoadonban_user_id_fkey;
       public          postgres    false    247    3297    217                       2606    17648 &   hoadonmua hoadonmua_department_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.hoadonmua
    ADD CONSTRAINT hoadonmua_department_id_fkey FOREIGN KEY (department_id) REFERENCES public.departments(id);
 P   ALTER TABLE ONLY public.hoadonmua DROP CONSTRAINT hoadonmua_department_id_fkey;
       public          postgres    false    3295    215    251                       2606    17653     hoadonmua hoadonmua_user_id_fkey    FK CONSTRAINT        ALTER TABLE ONLY public.hoadonmua
    ADD CONSTRAINT hoadonmua_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);
 J   ALTER TABLE ONLY public.hoadonmua DROP CONSTRAINT hoadonmua_user_id_fkey;
       public          postgres    false    3297    217    251                       2606    17542    ketnoi ketnoi_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ketnoi
    ADD CONSTRAINT ketnoi_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 G   ALTER TABLE ONLY public.ketnoi DROP CONSTRAINT ketnoi_sanpham_id_fkey;
       public          postgres    false    237    223    3305                       2606    17556    manhinh manhinh_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.manhinh
    ADD CONSTRAINT manhinh_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 I   ALTER TABLE ONLY public.manhinh DROP CONSTRAINT manhinh_sanpham_id_fkey;
       public          postgres    false    239    3305    223                       2606    17570    pin pin_sanpham_id_fkey    FK CONSTRAINT     {   ALTER TABLE ONLY public.pin
    ADD CONSTRAINT pin_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 A   ALTER TABLE ONLY public.pin DROP CONSTRAINT pin_sanpham_id_fkey;
       public          postgres    false    241    3305    223                       2606    17429    post post_user_id_fkey    FK CONSTRAINT     u   ALTER TABLE ONLY public.post
    ADD CONSTRAINT post_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);
 @   ALTER TABLE ONLY public.post DROP CONSTRAINT post_user_id_fkey;
       public          postgres    false    221    3297    217                       2606    17443 !   sanpham sanpham_trademark_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.sanpham
    ADD CONSTRAINT sanpham_trademark_id_fkey FOREIGN KEY (trademark_id) REFERENCES public.trademark(id);
 K   ALTER TABLE ONLY public.sanpham DROP CONSTRAINT sanpham_trademark_id_fkey;
       public          postgres    false    219    223    3301                       2606    17584 +   thongtinchung thongtinchung_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.thongtinchung
    ADD CONSTRAINT thongtinchung_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 U   ALTER TABLE ONLY public.thongtinchung DROP CONSTRAINT thongtinchung_sanpham_id_fkey;
       public          postgres    false    243    3305    223                       2606    17598    tienich tienich_sanpham_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.tienich
    ADD CONSTRAINT tienich_sanpham_id_fkey FOREIGN KEY (sanpham_id) REFERENCES public.sanpham(id);
 I   ALTER TABLE ONLY public.tienich DROP CONSTRAINT tienich_sanpham_id_fkey;
       public          postgres    false    245    3305    223            
           2606    17404    users users_department_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_department_id_fkey FOREIGN KEY (department_id) REFERENCES public.departments(id);
 H   ALTER TABLE ONLY public.users DROP CONSTRAINT users_department_id_fkey;
       public          postgres    false    217    215    3295            �   &  x�}��QA��(.j�ۏ��A
�w�\BX�&��	" ��穤����1���������q�\���������8>�`��Ib>U���nl�T���΃c�<9���Jgl�	L����t��&���0A�6:sy�3���?�A�Ig�c�3.�Wv�^�.�3/\`��������j~�Z���-�θ�p�őE�Ka[$!l�"���-vB��y�Il٦	��H![�iB�RP�F&dˢ3��&�,wRؖ���-OR`����(a[9%ހ
J`���l��6J����,����E      �   H  x��]Ko�F>�~Ş
(
�z E�DN� v��nZ�0�j�HU"��CE���C 'A�&@E�=�����C�a��ʴ"J�< !X��ܙ�fv��ee�Z��bF�mm�Oض�^�2~��	����$
�/e��V�}�����7�����p�{��6on���U�
��X�^����p�Y����6��{�k�A�~{���V�/pV�m�q�f������N<6����[f��^�U���4��-춃w6s,��p��6۷M�ڮݬ�M���@���~�Mv���P>N�c��w�?�]��d-+x�'�;n�UN���M��g�[�rGU-�0x�0g߲��/-��>Q9'G8�h����i��n���`�}K�ˁ`���@Y��@U7�a�k�~� >R�*����X�<�ҋӌ�߯�2���}c��2%�k	54��xt���uNu�0��p^��z���Z��}�<d5OF��4�'hug|M��z��ڊ���o�(������'��O���E�忾�3�M�}�g>0�\��X��01���~\Gp��;K�!�fۋ�d� �&:tj�<͐����Ǽ��f�����7�N��3Y�l@8���.'$��@;x��� ����@������Zd�qm/9jd.:�&,+��*'�61�ߒ�K��,x��M�i3�ު�-.�$��n��k�����9����o]~�x��pq�g�V�`�m���f���P��q��V5�����b���{�p��Aݚ��H[/[�����*��c&yK�h$���rk~''��t�@	ieB�/�.E���9��h9&hd����)~���Å��4T_��n�:�g��Z��S�������9Q���rz��wd�t��.�Ґ{V��a{���\�펮8I��9Q�j.��=u8�e�l<^�g�9�^dO�X>�͚a�o/	���?9�ᅽ7���]re�ޱ��Y�,U��E��&�OI�_^L1I����w�N��L	��+/	��G"�0g$Ά8�W�뇸X���<�o���8��� ��8�Eqr	b8�9P,���
x�Nb8W���`�D��;�a8y� �3m��k.��̮�Ù����57�W��s�b�����߼�}q�4k�<��s�N�f�&	U�o6A�4q�@�L�ʱ�j?Ȼ���W#�
���������TJ0���w��\t[&�)0$�C�X�.���f9�`��%��hHJ�(�k
�+�+s"���d:�{�W�UĜ� j�Z��5�(QCCr�$g/��V���Z92��! 5�:%")%"��Z�S�tG+��윋X)�H��Ro��{�eEmQi�E��Ee�v���tڢd�"j���d%Pi�2��HPLE�%H��A.M�Sq�I�{�@[z���4_X@�RK��R���n�-���2��Rjz��/�D�r����S�9Ӧ9U'�3��G4g:4�*��t^�d'�*��4�^�F5U��W����꭬��Fd��i�b��Ai�Az aUx�y � �|�����aO�Ԥ��(��7�)P%jwN��s�gq�$/��"�Q5�r���l�M�����r���Y��      �   b  x��ZMO�@=O~���~�q��PQ�B�B*���,lۑ��=��c����=Tp!9n����q*`R줸�k�]���=�x�lB�ed������l�h�ɖ���}uaג�E+}�Ɏ-]RmێI�d�o��+��ۓ��Q�9���< {��鑕A���&Ư�^Y��%��W^� ����5�~-1A���ުsIz��pw�5{�$-����R8�D���C�8�pPa�
ϑ/<G���,����;~Ƶ��pxr@\u`�+Ws�ԡ]1���������C�t��1TmI��#���i��:��ď㮾����Ek�k��F6��3<�D�w��A��I���h�ɏ��1�dP�3-��Ԅ���]ӑ(�$}7��v%Y�ʾ���R��������9�����ɺ؞[�_�߹$&Ls��4
-�TBV�u#x��|,�M��WךN�U;��pt���]Ӻ��]���'�B)ƌ+�g���V4���J�{�M&�/R�Nn�PQ�V�M�����z��G���J����ȹH�e阾��J}�F1�dw�t[��#��1���N'l�yX�o������FmP!�
�0M�R|+�~��/�)��7�T�Eg��V��ֿai �<:Hwt@�;l�����B��F��z����%v;l�ZSƁ�5M�" Bim�X[�b6k�@Le 9�\��t`z!}:k �4���6kkޠ�: 
ϒ/�������Nc�� .RZ[�ϵ��!Yt��|Y[� �(�mBl����f���	�٬�����

��L�`�(�dz#)8���/B�g��(�	��Q�tFR4 1O�� a����	"�6�����B�R�f�t      �   w   x�u���@D�C1�awi"��:��vr�������E�vAx��AxKͻCO'r�)�lj��K=J�'���%���H�PX��	�N\�Җ�L�o����^���^H�L����%"�^*�      �      x�3�4�44�BK �4�3�b���� [l6      �   !   x�3�LL�����".#����"('F��� ��      �      x���o�ȝǟ���
��")�O�؉�Ǝ����{�%U�Y"�卋{���X,�`�8���ivl�]�XE�ۧ��O���͐RC�V�=�� �L93���3���H��f��:L�Xs�m�fX��uM�T��2��,ݠ�8���ȴ��Q�4��~gUs�xXԭ�p�΃�A�)�����_�����î����8^O��M�ļ�;��ό�N���K_=�xi)�eJ��X�
4S�I2��RӍ.HK;� -�肴<��s���i��д�yhZ�}�u�Q��^���]�~lpv��޳{6�5���vz����'.T���gk�M�;��kMΦ�]֚}�uY�_��ǳ��՛��zp���EN}�ǳ��9��W;�=�!tv7��׌�Q)�me����1�M?c�W��� ���CvDY��=�zB'�8|�Ud��W�	l0{���������y~�X�t �G�o§�OݧG�%M<[o���6�[�0ЮC&!ӧO=6��_X�l���'�lwv҂(0�O �6<�W`k�ϏY��vx|2d{��[�v�n�k��ag��v�s����lE7�e��պ͚�N��٥꿰"�;;}�a�=f�Mf/�ev뗚��`�ݦia.>�\�����<��m�]�����Ɵ֬��&�k�Kx1�Q�i��Y�(��R��p\`7'�>���58g+Ή�����mű��v����0�X[�}�����c��]x������h�VLGT�O]�u��Z�s��ǝ�ۘ}݂�}1a#(xԕw���y�mc��}�Ϧ�B��ӗ��-���v��:'p[���sL��倭����ٶ@�����x�o�n��w:C(�4d����c+M���r�M�㽉�=���fVv6w!���s���~�]��x�${���Hw��ֳ釐�]zf��P!;�{P:��[`[�Q^�@�����;�}Lඁ3
�����w,��[��@φ<�����}�U������'�1��v��;��j�B�v�t3Dswv�^�b} �!�PګGXP���:�S�O�X`����mJK�z�p4h����r��Y�����e����jtց?�{n�˶7�w
���[�,0~�V6J�Μk׺׼kN������;����|wJ�9�\�:ل�7�v�4��Fcks�Ǝvd�*vŵ�K3M�`�FO�r�����������-`��i�Ѕ��o1�+��C�dm��0�؈�󋎶��aϟ���±#�K�n:��\ךз�[�ؑC��*�����I��h+��.�O�M=�Y��κ�ٴk�F�e���L����-�J�m�l7ol����ڪ�ݬX�%us�����N�f �h��a��,�#�7���*�Bm}�zt�^��� z�;]�U�_��:��ZɰD0�ᆡ��&��;F��B{�!�A��	.�r�����(��,�B^*��]*��x6�%.Q���D���%����]:إC]:Х�\:���
���|��c|Շ�!���u�PX����uX� ��X.��I��ΰB�8>�l��1J����q<<�+:)�>>w�>�� a�9����ܑў(5��-��C`�d����!�����>D�5��O��^�WQ瑱�^�#�Y��v�UF;B5	��J�#�Z���Iki����� KB����0�r�w��V1�f~������g�%;F}��XM}z�*Q_E���da�ǾC�3�{a"��8��x�>6��w�m:�6'?ׇ7'�_=�P}�h~I2�$_�I�h���$�C��b���s#�K.w[����	��Y�R����#(�o= �>��BH^������"�l^�Ɲ���Ź�b����;#�TPb�!��,^A������54��a����KE���%�1�{}Rcd'�k��>�uB	[( �8͍7� �Ѐ���{���E	���ʐ}"��pH,R�ʱ����l�[0���� O?�k��|z.>����#@�����x�z����!�@�?�	�R2��D�F�]f� �mCB�R��B(�o5���f��rB���jFG��W��?S�i6w���|�L�`?�2g=������/��Rt��αZջ?;h{���5y�gP�����ԐjjHM�����N	C�)aOI.�x���P@H��� �]���@w/�@�����>5�|���h�	��r^��#,��c )�;V0j���>�#N�0�o��k���������0��z��΀�w�8	��� �k�e��C,��2�3T|I��ę��!om1��xM=�B�����7�|¯jh�mB a~�8��c���9�Y�D���[�+�����*��S��SSpOx�B��s��9�������7L2?��
���S��O/K�9B����\�4n��3�Z���^�����N{���5{2-: 6|�6~��)�^���d?b,o���on:���s*H��^{�m�W�]��GNкZ�m`_\<d�LNJm�͙m[ȅ$U�� Ɉ )�F�o;�c�E�G�v����_<p�6[9�f��jbB5��:��mX(�t�g�L��!J5}�Y ��#�xi�C����5������m��#u%����-�ΗdF~�:������ �&��O���v�*�����)��Z����Zh>t���+l��O�bp��6&'?����d-���^@+�C�>���mx0v�	=�oec<��1p�V_=r���t����
�I[�7r����˾��uh�+�Ǟ�J��w5Q�ǰ��yH
�Vp��Y�J��R! �Z�e���r�Ϛ����lw6�&n�m7o�-|�Q�Ā�,q��ǉ�fIDki�]�� 9m��M3�QWL��,ʜ��)�-�^{@_@zp[Q7����Q.<��p�r�v9�*��� +=�VaV�Ia�:%Q'�!�t�ќ�*D�����;��[���c���.�2����9U�)�X��q:.��#]m�:�!�+� I�W��i��^����]�m�j1ёS:%����J؝�A4j�.cT��ؕ~F�✤�I�:/���4@j�pG����؟�3�/%������<��	��J��fs�m�)��.�@]Wu��ڲ2�DD��?r�}�m���U�l]#�>WR�s�%�,-���|�2ທ��m�Edrh-?��R�!�ş:�mv΀eb�m��7,�ϛ��ҭ�g����0���i;�uH��r�Y�Rd�%��|!�R�	?-�V9�����T�D����+�T���\�+�r���M���p8�5{z��1����*�-�h��K�U-1gl��Zl�X��'��������v���j�-V�V���k�1�.v����蔭4���NbP������ ��i)7l�r�0Wݠsx���}=@c���s�|�Bc�ϧ��8�����_��x�!�@ڳ?Sm=9�cN~9�������$Lo�?���'a�.�����i�-n���˯�6�,�U������L�n�t���.WL��τ9��uoG�9:d^�e��ț��	c�8<��jq�o����E@Si=
��>i�+s�l>)���Xe��#�}0ӷ�sXb��ؾ��5�B��6Rq��MV�y�����L�^���UᏤ[�/���e2�Lz_&r���J?ׅ)th�Ǭ/�GK.SI�)h�(-"����;�4��xh��T�N󐅕|*M�����(��b�����������ғ) �u"��a4�f����	wl��.w��*���8���2ޢ�&��������c��z�B����ޛ}�q�#l���x��y���s�Q�]iw��˵��(D�0�T��ٽ
~>oı�<�C�!�wi^>��;�:f.����Gs������5m�=�ٿ�ձ�W� ���9^��G�X��'��@�v�]h��]?榾=Ax�� � 3=�J��Aф�"@�N4ݠ�e=@�W�)xk"�  {  r|i )�`GBc�c�:�y|.�)�'���]-$�$ME��,܁�.|8`���ct6F�������G
1j��l��e[��F��א���z�����ڋ�22�E��&DdMA�$��7�egh53F6AOԊ��e�,|�N4���sN"6��e_IO��|�,Y�Y	�'�y��'O��qm�]M�	�ago#�>�Y�Q~�-Ō�?�<AB������A��C����>�w�HH:��.�u$E��9�M�h� Eu5��v�B�,��RB&�P�*����	ֱ%֩G��mH�=�W{jf\��ly�={�s��R:$�9
�=��bK��Z6����`[�^ؓ`~�H9_I9o�Xi��9;ȋ������||���W���D/��Rz"�	�* �����0a���X�.��yM�}��竩Dz^����G��#7�z�ʸ�K��+pG�h���K�Zy#�<"�sM���&bo*셰lӼ_�%���AKђ�)F@T�߻N4_�V�����_"���]tX�%�,d
Y(�4/�8;�j{��{�͋�C�2QF��)=S�:1;ғlv"���w���Y��}���pqɽ�T�<XԭH�cFeQiZpgy���H]�S��H�[�C�K.Ek���z��e�E�Ȳ�jbY���M�J���w�r��W���iDqz4eW�Ql�Z܏W�yv�����x��e�Kff�Ya�2L��:u��.x�'b]��O.���"/s^($Q��"T�UK�.͏�&��I�ش������h��G�{-M����q���|�pl׻�K��t+.�	�S��g���X⒭��r
�U��%Ѽs�Lf��Lʘ{W��G,��K�m�C��aLx�S �4	�l@T��Zj]���b���7�	��#���&�U\"�cZp����ϑ�4�"���66����nx��>��vz
���ǀ�B��(� |�5��[�1Ȓ��.w��j�b����R]�g��np�j0�+R����g=�pʱ�Hxn�0j���2��m_x���꩘��ֆ���֍�5gIV�%���*�,}�����Z/S\��:!A�2`3���&n{�����8��J*is����Mtk#�c��-�x�3f�I��3��KVzS���T���s����N]/�X|C�[�,"�_d	b�g��$�|�����>r�kܻ�)��|����i;�9#���~FB��_k�$�B�|��'��醕ugUv���t�^��1\�Ǻ��߅���4����\y��ب��]\/�"�ط�6�Ȉ�z��yX�]`g\@�d������|�u�a';}�Jó������#���Ԕ�#��@�fX�>�hۋV��;��Ar4��siL�b�{Z��Ry�Od�FH�V���\�?
�u�!�ʽ � �"�>=)q_���H �k�]� �7�8D�ncr�A걹>|\��c�4h>�a�}�:Ɗ)�f0�o�\b!cʀF�6	���BH�H�~a�Iݾ{���QQ�`'m���)�Ay{$�NC(i#�4��ǿAz�o<8��1��u9rLa��ns7JV�B�����Սrb)e�H2��+����.�����Њ�ˬ�S_����^v��S���K �9ཤ�E�C�v�}pp|1Ro%�|����y�z�> #�G�)�B��Ӗ��&G=��7
�k�!�/	�*w�sP\Zg3w�X��$iD�oL��F���jb��:�B�$����5�* u䜺���cU	��H��rm>R��Q���7�@]��Dq�35�J��!����iRn��ǐ�Kt�L9o�����b���S���b����s���𒗶�P��a�N��9֔p�i��-)#����i�m|���3ِR�� R������ �	O�P���O�f��F��e����xQ�{�"��]�G��]fc���E6�x�[�IO��ͼ\Υɹ�Dʩ����������]�q� w&��%%ӫ@\;{ͤNZ� p��E�3��*��@�w"��nHl ���㭚OP��D*�/�-�c?��C���$L�-/�O���Œ$�t�}0��??��C��[ߝHn���Y�ļ�I�TZ�S�
Zm���IJ��;�Eo��hu�uY"����p.����0�9Sq�R����Kk�S��)k�T|!���
@>�$ΠD>�I��8 ������,u�ż�)�j5�J�Ӆ�؈f�Kj��9�÷uD��QZ	�S���QX��"/���S�߰�rA�����s��W I����Wھ�o��~�i��
�n�J�.m��Ka�4�M�S�l�ҙZ;�[��L~څ��>��C��6C���%�����ے7�&Mx�Cdw��{a8e[��R�QG[��l�%��.hj�-���ki�vLڌ�r��T+�ħ�S��.�7
2j�kT\�#�9��z���ܹ� �U���2i&�P�jK��f]x�KC�ew &?��i� ���Z{�]h��e8�m�F|^g�׹��:k�ro�#o�-��i��K�
l���e�D�>�MZ#sߪj��`�wt3��?�`��v��%����/�n����:x�A�j�_�ǟO5���D�=��f�}g��V�O�d������WVl�++����߼M�H��3�����ý2��_�Y���r�����5���4B��H;�fR�﹆���s^���"���R}��6��U���ϰ'{��\1�>Wd�C��_��Ζ���Em��F��B�r�]1�m,�{���z4���p��VQ�C̪�J�`	3ch��X��[������\LȆ?n�'����w�[�_R| w%HcaI��Z��g�.�ߩY��;������/[�����ndy�-�)�U��6U�\I��*|�V�O��{�w��?QLd      �   �   x�3�4�46�@�yd���
%�W�rrF$�e(�^�eR`FH�1Qf� ��32��Pehd����Y���P��2�� d�9��!���r�\eh�]����м#R��9�9��;����B�R��&،)=�0�+F��� �
_R      �   �  x���MN�@��ϧ�UVa䮟v{Id"�e�͈����=�r���B�9Tf���0n���V���W��:�E������ɸ4�63���8S�����װ>5'ח�&�K��;�%��WK�@�)����Fg��B�[��M52�qT'���M���ha�\�2M�:��M������j���j��q՘�����v��p\�J�%��{u�Wf_3�0/�݊����&�j~� �Q�ni��|f�[D�̫�����s�u����V�g����;����v��K�w2I�0�M����n뜽usf(h/�m����i�K��t2�&g��)���`q=J1�R<��o
s�|/�ߛb��L�_�̿��!j-ZF�����'��.��v~~����#�`r��&Bp<��f[�����)�S[҂���{�2���
L�����}��)H�1؂����r�����|\b�����b���XM���Xbx�̳��<�z��h��CRpw��"�X�F"�x��	�g}�!�}�C�?31�A��Đb#C<dY{�!��5S��e�� ��,d����� �1�!ٶ�P�l:�?���<1�A7��@͠�1�C�g������L�B�?1\xkdb8�.k�5��<H��/Q=L!      �   �  x��]�n�F]_}E/��˙�d�U�"�bd���r��b�Ә� ���&K7z���?I=$�X�E�Hږ�k�n@u�.�^��P6g���V7�������j�ju����77�U�0��D��i3�Kx1�Jv����!w|���<�Z�i��B�j�ϋ���wQ���}��V�N�sZ�"�d_��,�w~{��vy��4��A5�k��]0�=������CԻ�|Z�&"Ix����;���7��ϓ�U�c&_��mQ\������6JMJͳKM��7�ꕹ1���u��v��b�?���ad:`�(-�o>���e��z�M4�{1�IK�y�b���W����
����7�qh���q���ǿ�X�\-���1h<8�?:6�A���S��z���l�K���)|��g|�}0���)M�hjF��)�|8)
�I@�|
(�O�xJ���T��a<�����9� 12�� �㱹=�Gg�ZAfd��O�c`�s ��R�Z@W+!���_dn_a��D� ��Ç%�7�ur[��,�����zM�*Ű,��Q�p�����5s�G/5ޜA���;����m��u�~��hݭʎ�m?|k��6&N��1�]���5z$n��z(Me�cL�E�S&
^�,+d.X&��}Ǻ4)�d\X�D��-��W��\_9��3�R�E�dRq�E��������H���3ޜA\kv�	�i;�bޘA���	���ք�=���%����z�y�zׄ����5R�E:��`�&�`+KY����*/D�y�������A��;�T�D�F����ŠWկ��a^�� t1�sW-ﶺ�gբڽO*ME��>�6F=Ɓ�A@��:����1�|Y<���|��6
��&m�?��n����=W�}e��}e~�D�R��-p;E�_��EY'�p�̵xI7(>m pm�Z>���K�t������m�+�v�r:f�c��;f+�pkf���Y~�:�'9�dRq�=�6��=$uG�.���I� :�h�]�����9�!�v��Vd@8��ZG�e����J3�p)uZE"ci���P	���!̲=M�lo7��إ�aX��4��L{'P�r)�r�������%R�������}�8O���z�	K��膋������� �=�f9��&���f��,��X��^ս�ա���b"i���~��.����MacFgOc*�'C������9��4~M�l�P/�&\�q��X�A �1�#���g�㜁Z>����8	}�?��yo�a?>����0��4�h���D�h��G'���rS_�M��F/L2��b2����-�DF�a"�B?4R��v��@�,(�0��hb�*��I3�-n�~�ET	�Ɩ��ۼ�v4r��k�4�����\F�U���Z[zֳ��8��zC��3��K��OK�L�9��QE��Lf�P�b<��j�9���R�h�l{`&������jm�A�Dr���q�#��>�=������I�q|���bq|q:��kݗ��������΢�b�,׫�2?g�T�_��WR�k�!w�����fw�2^�i��L�����Ԭ�N�u*�t�.*�l��mz[��
`h��U�}�������8��Bo�<�+� m���E��"8h��^TPY	��U$�Bz��^E������%T.@��)�r	�HD%�K��\W$�����ET��6QIDEET^ /H�#��4<^�6��H�;c�D���4<���.3��_rDixO��	B�2�^H���)B���m���6�P ���6��^��&
ii������ii���QZ�LA��������4�@ii���Z�䠍���l_H����Ib楉�R�63I�<c�H*�ߚ%1�������؟� 1��̧��9h��]�w�d�H��.$���j��6��^�ަh#��"�6�A�m��}I�M	P��6��^�ަ$h#���6ToS
����lz��@�m��]��V�,G����xy�?�����d�ã�+      �   �   x����m1Ekj�[��HJ"���������e�� sE�'$v,����%�2� ��e�r@>�'�P:�����~�.��<O�׏��r��S��Â�!$�I�w�Y����4c�����I����X�uT����M����eL�)�g��Cwq�k��#�6Vu�25C�|A�Z���{@V�KVU��
�=�@@��s�"��U6}Pn]��t|J)}V��
      �   M   x�m���0D�3T��9�ppEb�WB��e�?ɔp�YPeR��M�T��Iy�njO��5u_D�']"g      �     x��Z�n�P]�|�]�V����\?$�T��FJ����7DIu��V���`�'�@j�|I��T.`�:I[�[)���3s�q�8��W5=�Ͼ+ӂVG~0Q���z��,x=�y>V��îzrr�T٪u�%\��\��Z+�q�6���o���l���
_{��WG�e{/\��o�:ݣ�?/�v;��~���x��l��ws�(7�� dp�
$���"�XxmG/���A�3�L?�Mnn5/�;'~�NmQ]��j���vB8��O1�&�_������Tt���@MG�
F�ٷm$�vC[���uzZ�a'Z�$''��	�g�0�����x]<�[��p���y�Y1Gx�R8�X�s�\c�:��h���UM[X��J�����u��R�8�����$��ZC��S$�G���Ͼ�l��l�*��f�L'�x�[�J����KJ]�ɫ:ގ��,rqqV�PhS!��mh���H;����1��n�I������8�@VىiІ
/;*G�F�bPyV �#e�׊�sd@�v�@�٠x��#�H��\hE`�n	,��J����	�����Ӑ�*���S��=p|<�@
�X��c���!��y-I�>T��
C��g/�E qX6Q*��0"#�6d%+�p���*"�=P��zQ��8�k�٬��}��#�WδK�}�`�x������r��؀7l&ٍ�ą,�Y��ٰ�f�1c�,��>�3&M5,P��ɮ8�K�,��v�u������a`��dS�.56L2��.}[��j�mՀ�      �   �  x�͘�j�@�Ͽ�b驥$��ή�c�ۤ$�&N!�^�cj�*��iߢ�s��^�c���7���K����N����|�20xs�������X�����E�L=5�ju�(N���׃b�~?~�������RM�7_է���2�����Z�y5����r��Mo���U1���W��q�!��0��j�M��y;��m��ma��ۯa�`�����*
u�y.�:�����;i4=8:T��^��)rpx����Õ��b�3]i��<�k:��<��yQd��&e#����~�ӝ��Z?��.���Q�8X#%H��v)��A:�.�%�jxo�H�}�FCtߧfߝ�y��s)��1e���fӕ�"c �|.g�4E+���bqS�ѽ�.цg�\�nV^f��Տ͋IWG���6����QU��A9ɪ|T���Ȱԧ�\?����Lk�����(X�{�BM��ϰ��d�v�$�BJ��L�b��~�j��H֫��V-�Ȃ��A���AN� zp"/)v'�!
'J@M�}8Q

��YQ������-q8Y�h�p�r=�!�d�6�dl���zKy؍�V-�l��mj�l	lN6��q��5D;����	�4�ڇ[p�e��P��x+�Ƶ~�y�v'�!
'N jN��뷭�[�i���V-���������=89�hprN��Ppr�iB��w�Q��K�/      �   9  x�͖�nA���b_ ��2{�RD
�44&�J��BR�<�QQP%�%��o�Ilٖgm��;6ҩ���|s��x9zrYA�9�8���ތ&wn������Er5��g��'��ݷ����5��q��ǿ�A�q������ǯ��^�ө�fSW¹6t���l��������a�:a�A��%4K�G�b�������T"��^�^�=>~�D`6��L��mb�hf�oV�p�0[Qg�X݉��	��kS���E	j�t��l��
/5��0�Y�l��Y�ح�R��˭�"���o;�NSh����<���U�R���\�M�2�7x_�!��C%�e$���<|4e�vaQ�<.�
M9T�< �(ǵ��RxrM!b�&�O*	H:�)(�#�)�m��!�@YTQ�#��
FW4�TF����.DbS\&��HܔJ,`9 �X��j�%�V���K���k+�8�p�p�r�rIŚ�.���K�h1v��p��4��Ѹ�4�|.i	-�rɧZS.y��p�3|�X���p�84���o�X�l��ڇ�m�%��o��b�?u��L��      �      x������ � �      �   �  x��][o�~^��ylQ��+I�MvR�o�U5�X�V�]�\�b��0
#�� FX� �c�n&a�a]����sf�ʥ`;T,�#ÒH��̜��s�33�5ESܛN�5]���勊������V_�⥥�����KE�8�>`��d�g=g69�Xg6�ƻ����
������l���a[����.E�Ƭ;�������^���{mvIi9�Sn����������B'�M�\�1��mO�/]Ս��W�&���zk[��Ö�;��T�v�o���W몺�k�u�/�0�b�h�yP��\�-;`-�u>����Z��m�����w=�(���h꯮��Ta^�7f>X詟��;����`��sxF4a�K�t6yeΦO���+�w�V�����̳ᗰ�w/���=������<��Φ�~��F��D�.�
/���%���߿�c6r���B]fSh%v�����k��L��v�z�\M�Ú;;�v�r7��f��F4�⥶~Q1�gAV�����S���U0���XZ�$a�h�A.a� �N;�c4g���������>�
�s�Z)��^�]+-ۏv����l�uy �|(��f�j��;C�(b
�/E5״�����!x_���`�<��׆j����V�Vw�	~gWzW1/5r�d�y�ճ�)��Xp���'����:`��ɶ����,]�A��Ja���K��7z���������E�NRpЈK�E�@I�Nȶ�������>"��!��Qig3�x���ʂi�6����7|�h����s���<���A-+?�5��2�&aA���fg��~�"�^�#�C[^�XE(���� ����'�D	�v��n{���������݇*�5ƁO�������#��3����  �L:y��a�%.�4KR�<�q����r�cn>���'�{}���o�m�b2����ow3ر˻��1'@�;<�[���qB�Ŷ�}�34�Z ��9Y�.CU/��u��ܸy��C�4�ƳuY�[3<+K��lz�����<�ox����8d}�h5�t���GA���>��x��o��꼡�����-�J"ߌ�xW���2������cp��E�he��ESp%[W�L����꽤��S��ݯ}�MDL�ȧ��oA���q�l��/�<��W:��=XÇ�k�i��C���� }��a��kdەF�Z�7�xKƕ����b*��vเ�-��銡3��Mc�LX��sZS��bBpD�=�v�@o`�l�n�C�`0�7���t�h8���ř~+!*��s���~t���0z�FBTᲝ��)`�%���r���6�����l�ft����t� j�حlO&$Gh�1>=�N}Hw�n	�=����}rf��,]�]�߁��$�:��Q��Y	k��DsM�x����-� 9���R7�Q6��3�M΁��7@�cw�q�V�r\Ɔ�Lס��T=_����~����$��}I}np����9�O���s�,"b#`����&���?�IAw�� �a\^:j*i�K�>�C^�s�Zl���b)�(`��@ԥ���� ��N�A��c�Q]�+e����O���(��[��8�7�\n�1LR>g�}4!#�Ol�r��!7��bم.����c��Ӑ��[����69cr�����FX4ӷ�P�C+��Q���|��Rٵ�5�劮�����A�^�%FO+F��A��uv!�@�jI,���gh�9`)z/�P3�c�V�z!�s���EdP�.m�X#�rQ
w3)H�x� �7Y��b�JA���y��񐂡ɫ8���y>��c����3G��)��=�8�wC����j�mٕR9!|�A�X��qgH�^^I��r�$.�ne|N�J����.�# �JhY~>a�/=�.8���/�c@[#�=�<1W��E��JX�����}9���ܿ����f\�q5���0�uTBL�"Ib�n��I29.(d^ *2q�}�����gX� �L��*���ԁ��53I
��n�t����y�z&i�-?i���Փ��$C�З�3�7� [�	%�!��E>Ϊ�0_��|�/I���dL A�t�JPOln�I�%'gYI�Ӣ<?Vɑ�l�^���d%�h(�� �-��(���d���7(T v�Ρ�}�UPa	S�T��"�C\���R���������Y��a�)vK`���X����
�'/4����IU>X/@},��Lh;��Nif�ڍ��~B!�!�gz�	�%�?<�(��\������¬��g�n����zn� R�\�`^�ٗ�.���ȏgz1��d��Ԍ�J��Ez��S=�����{��:%q�tT��z��*�x�w�jĬ�Y��l��d�m�Q�j�sxl�9p�(�N�e�N�X0#��rv�v�L~%�,\L�v�flzF>P�}��çV�@J)˩��[b�H�2��k�R3X���o*��@����HHW��yk��Yk�b���6t+CS�%�����چJ�0
��6w�5��&�V�z�`�G�K�#ݪZ��4����ad����%ڤ���@�|�>�*"�D��댝t�S�"�!n$���_2��>MY�4LV n6�~Q��U��N���ӠW�=��瀜�� #�|��t\Z�����5�d7��)]� ����u#5���!A��2�r�4(i0�A#+2�A�"�?wb[3�a7+u	N2�}L�ۨ�	DM&e�&�ղU1�L�����PM-f����:d�qN��Q̕��k$��]�~����5��8ǔxe���q���q�)���8w`%Q�m_n�_Ҷ}���.���}�K۷�5�%7�ˍ��t��,�ܗ�����k_����u�r]�ǲ�{u�M��R�<5b���O�[��d��d���䅤d��,�f�U�a�{X�aѳ[�T)"JqI"����JQ���9�S���RD�"�9=+"6��RG��:�a&����;���y�����i4�Ye)BK�#��F�\�-zS��+���Jp�(*��L���ʩI��z�"ސ���
�!q)��� n�E`IA\
�K�MK�����G!���� nI1\��JϬ��T:�����Oy��<��T��ƴ�<yژ<m��1+�7�o��$S=2�s�S=V�Tq���K�q��h�s��R&�H�G�G?�2�����yy@�/q@���e�5Ӓь�f��f�d	���J�\�#W��<_�VVV��ЙX      �   a  x�ՙ�j�@����SIU�3���Bs���mb;�q��@�}�B�Ki�4�@ >�~���8��ƭmIn�����F�F�o�֠�sq9�>T����c��Îz����z9������x�t�c�U'����Oq؟�����sOi���\w�q���-�q�R���t��8��U��S�VR���H���*�w�*���awr3��*lZ��%>S��hiE�����"�D����,&����!��MF׀�T�L�	�����]>�Kۅ�[.��\"�������:d�Ձ��̓/��7P����Uo��8Ω��)'������������xhr����Z��
�o�-X� �aK�?�5�J�,��Ʃ���={T��(�y��X`��<�x��������x�ο�w���vP�w��t��8���֠���������]��o��~��\�%b}�)3�^+@%Dguz_�[�x�����jԛy;���^e��
����ˡ�w�w�w�@�]�	�Y�+A���~�E�g�bW=m&��p�aeokO���=0��6��ڂx�(��-`�ɼ����W����\L�֕���Yln�xW��I^$@��;�^d@��O"{� 
t�q��x�x����H��`[k�b P�h�R
$P��7]$����%ZgYZ]�R|�_���^b�V��d/�j�[6�`�L�����%$P�Id/ ��;�^N��6����7��({��֚�L�j�^f`���"������>�^gYZ]��_���^���@��^��,>�k<��`�L�F �β� ��O"{��h7���5f�����^c�l�;PQ�f�������I���徘�      �     x���o�6�����vI�0P����F�9=�8F$4��X��C1���E[Z[��b;�����dO��()��abH)$VD�z|���CI���Gr�r�=�;�_:d���-��'K�б�=�Xv0~�]���`o@��sh�ž��y��,��7v> m�'�X��E����/~��
����",u�uhY6��[���GX�Xp�:��r�s�ů���;,��0�����Y�-��5`E4�<m���o`> �/���#�%'4�����-��6<�E67"��N0~�g7��8x��j�362�l9�w�6�h'��� .i�_9�7��{d+k)�l'������i�9%���/X�%�{C/��Ж��`�+���?��=��}R��
��?s��yR<鲏�Q����uC�Lj��^�����ߣ��/���{�mb�/ӎ������ňl��>)u��7����� ���X��B���i�1v��כV���sPe:�,��(�(7>�[w�P{wZ�I�ۛvJ�Ѕ*�a_�mvQ_8�#�K��e�A���m���ȶ�/A����[�}b���3��?������	KZ��?2z�X�3U@w�U����1����2Z7��p��iP�S0N�G��t~\������c�r���c�|H;E���,P�p�:��s3Q�H+i�P �7����ҙ��kF������ٵə�"R���g�"��БY�?ٛM��\� ��no< ]{�>�����<e&U��/�m_[��1ڴ�C����)�m9�zz5�i:����ۋ�Z��q|��\�6�,��Sd�e�'�;��7o�g�����X�Q�t�4yM�S]$9��5s0�e7��7�Oz�*�(s�0c�u����]\�"�#N4�pԱK6���8[��H����������Д`�����
�Zq��׏�M�h��[)�K������YVi{�<�,��r�S�#Q�1Dݽ���4턒)i5И|�^Ḿ\��yK�L��Y�^H�%ʭ�X���|��,Vヮ��aKZ41Z�z�]y��5��z�{�c��c�m��S��0��h��>��@ƀ�=׸�9�J���E4�V �E4��&F0
x+�=?�Mh���)�wyg�T�����}U�r9�Ր���٩7���v�Ps�޴T~K^ao���1���~����Y���7� �*쭰w���������Y.I��(P�g|����,W�gfz\&�OTHp~H�Հ�7g�.NR$���x� k �����}�Ln}~5���`v$�5`s�V*`�H�S`�
	*$�$�0��B�
	ʬ|�H�s��	�!H]$�u���+$����H�W�K= QT$�k��R<��4�<WV��
p1PVA��AX].�*|��T �Nu�!,6��ꭊ�}t���jH]A��V�A��&�Ps��zt�mba����k�˿� ���� �^]�`a�ȑDQ,�Vo�.�X���
a�Х9)*���z�T�|K�      �   �   x������0��ӧ�R&�v�����²A"�n��>�N'�'�|?�|�I4���{C��^�aʊ�e���P��MkD^��2�Ӎ�|i���lT:�Y��i�,L�$u:V��𺤄/g|�X3��]r�U%�����<7J�,��"I��ִ��s���$�v��V�餇�ak��j[V�4St�Tk[���B�^%5���K����2Isȳ,���      �   �   x�͐�N�0���S���v�8ސX���LY��[�NU�H̼ /����ɛ�FTd�RN7��w��!`�&��:�m��t��_�J߻��85�ڀ�>]u���%��B,ӊ1���Ƞ��ɉ�Y���ۀ�pT�o� ��!E�2ׂI!�^K��,e�z%��D&���Z�-2e�.MYXe
��䩩�t��]��܍��n�>r��cB��Ϸ@o��GBgIh��C�0���!�# �rޤ��/����     