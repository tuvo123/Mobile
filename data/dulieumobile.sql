PGDMP     !                
    {         	   webmobile    15.4    15.4 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16895 	   webmobile    DATABASE     �   CREATE DATABASE webmobile WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
    DROP DATABASE webmobile;
                postgres    false            �            1259    16896    bonho    TABLE     e   CREATE TABLE public.bonho (
    id integer NOT NULL,
    masp text,
    ram text,
    danhba text
);
    DROP TABLE public.bonho;
       public         heap    postgres    false            �            1259    16901    bonho_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bonho_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.bonho_id_seq;
       public          postgres    false    214            �           0    0    bonho_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.bonho_id_seq OWNED BY public.bonho.id;
          public          postgres    false    215            �            1259    16902 	   camerasau    TABLE     �   CREATE TABLE public.camerasau (
    id integer NOT NULL,
    masp text,
    dophangiai text,
    quayphim text,
    denflash text,
    tinhnang text
);
    DROP TABLE public.camerasau;
       public         heap    postgres    false            �            1259    16907    camerasau_id_seq    SEQUENCE     �   CREATE SEQUENCE public.camerasau_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.camerasau_id_seq;
       public          postgres    false    216            �           0    0    camerasau_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.camerasau_id_seq OWNED BY public.camerasau.id;
          public          postgres    false    217            �            1259    16908    cameratruoc    TABLE     t   CREATE TABLE public.cameratruoc (
    id integer NOT NULL,
    masp text,
    dophangiai text,
    tinhnang text
);
    DROP TABLE public.cameratruoc;
       public         heap    postgres    false            �            1259    16913    cameratruoc_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cameratruoc_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.cameratruoc_id_seq;
       public          postgres    false    218            �           0    0    cameratruoc_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.cameratruoc_id_seq OWNED BY public.cameratruoc.id;
          public          postgres    false    219            �            1259    16914    dathang    TABLE     �   CREATE TABLE public.dathang (
    id integer NOT NULL,
    makh text,
    diachi text,
    sdt text,
    hoten text,
    trangthai text
);
    DROP TABLE public.dathang;
       public         heap    postgres    false            �            1259    16919    dathang_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dathang_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.dathang_id_seq;
       public          postgres    false    220            �           0    0    dathang_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.dathang_id_seq OWNED BY public.dathang.id;
          public          postgres    false    221            �            1259    17100    dulieu    TABLE     x  CREATE TABLE public.dulieu (
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
    ttc_thoidiemramat text,
    masp text
);
    DROP TABLE public.dulieu;
       public         heap    postgres    false            �            1259    17105    dulieu_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dulieu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.dulieu_id_seq;
       public          postgres    false    246            �           0    0    dulieu_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.dulieu_id_seq OWNED BY public.dulieu.id;
          public          postgres    false    247            �            1259    17077    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    17076    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    245            �           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    244            �            1259    16920    giohang    TABLE     �   CREATE TABLE public.giohang (
    id integer NOT NULL,
    makh text,
    masp text,
    soluong text,
    thanhtien text,
    trangthai text
);
    DROP TABLE public.giohang;
       public         heap    postgres    false            �            1259    16925    giohang_id_seq    SEQUENCE     �   CREATE SEQUENCE public.giohang_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.giohang_id_seq;
       public          postgres    false    222            �           0    0    giohang_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.giohang_id_seq OWNED BY public.giohang.id;
          public          postgres    false    223            �            1259    16926 
   hedieuhanh    TABLE     �   CREATE TABLE public.hedieuhanh (
    id integer NOT NULL,
    masp text,
    hedieuhanh text,
    chipxuly text,
    tocdocpu text,
    chipdohoa text
);
    DROP TABLE public.hedieuhanh;
       public         heap    postgres    false            �            1259    16931    hedieuhanh_id_seq    SEQUENCE     �   CREATE SEQUENCE public.hedieuhanh_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.hedieuhanh_id_seq;
       public          postgres    false    224            �           0    0    hedieuhanh_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.hedieuhanh_id_seq OWNED BY public.hedieuhanh.id;
          public          postgres    false    225            �            1259    16932    hinh    TABLE     �  CREATE TABLE public.hinh (
    id integer NOT NULL,
    masp text,
    mau1 text,
    hinh1_1 text,
    hinh1_2 text,
    hinh1_3 text,
    hinh1_4 text,
    mau2 text,
    hinh2_1 text,
    hinh2_2 text,
    hinh2_3 text,
    hinh2_4 text,
    mau3 text,
    hinh3_1 text,
    hinh3_2 text,
    hinh3_3 text,
    hinh3_4 text,
    mau4 text,
    hinh4_1 text,
    hinh4_2 text,
    hinh4_3 text,
    hinh4_4 text
);
    DROP TABLE public.hinh;
       public         heap    postgres    false            �            1259    16937    hinh_id_seq    SEQUENCE     �   CREATE SEQUENCE public.hinh_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.hinh_id_seq;
       public          postgres    false    226            �           0    0    hinh_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.hinh_id_seq OWNED BY public.hinh.id;
          public          postgres    false    227            �            1259    16938    ketnoi    TABLE     �   CREATE TABLE public.ketnoi (
    id integer NOT NULL,
    masp text,
    mangdidong text,
    thesim text,
    wifi text,
    gps text,
    bluetooth text,
    congsac text,
    tainghe text
);
    DROP TABLE public.ketnoi;
       public         heap    postgres    false            �            1259    16943    ketnoi_id_seq    SEQUENCE     �   CREATE SEQUENCE public.ketnoi_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.ketnoi_id_seq;
       public          postgres    false    228            �           0    0    ketnoi_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.ketnoi_id_seq OWNED BY public.ketnoi.id;
          public          postgres    false    229            �            1259    16944    manhinh    TABLE     �   CREATE TABLE public.manhinh (
    id integer NOT NULL,
    masp text,
    congnghe text,
    dophangiai text,
    manhinhrong text,
    dosangtoida text,
    matkinhcamung text
);
    DROP TABLE public.manhinh;
       public         heap    postgres    false            �            1259    16949    manhinh_id_seq    SEQUENCE     �   CREATE SEQUENCE public.manhinh_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.manhinh_id_seq;
       public          postgres    false    230            �           0    0    manhinh_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.manhinh_id_seq OWNED BY public.manhinh.id;
          public          postgres    false    231            �            1259    16950    pin    TABLE     �   CREATE TABLE public.pin (
    id integer NOT NULL,
    masp text,
    loaipin text,
    dungluongpin text,
    hotrosactoida text,
    congnghepin text
);
    DROP TABLE public.pin;
       public         heap    postgres    false            �            1259    16955 
   pin_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pin_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 !   DROP SEQUENCE public.pin_id_seq;
       public          postgres    false    232            �           0    0 
   pin_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE public.pin_id_seq OWNED BY public.pin.id;
          public          postgres    false    233            �            1259    16956    sanpham    TABLE     E  CREATE TABLE public.sanpham (
    id integer NOT NULL,
    masp text,
    tensp text,
    dungluong1 text,
    gia1 text,
    dungluong2 text,
    gia2 text,
    dungluong3 text,
    gia3 text,
    dungluong4 text,
    gia4 text,
    mota text,
    baohanh text,
    ram1 text,
    ram2 text,
    ram3 text,
    ram4 text
);
    DROP TABLE public.sanpham;
       public         heap    postgres    false            �            1259    16961    sanpham_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sanpham_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.sanpham_id_seq;
       public          postgres    false    234            �           0    0    sanpham_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.sanpham_id_seq OWNED BY public.sanpham.id;
          public          postgres    false    235            �            1259    16962    taikhoan    TABLE     �   CREATE TABLE public.taikhoan (
    id integer NOT NULL,
    matk text,
    hoten text,
    email text,
    sdt text,
    matkhau text,
    diachi text,
    quyen text
);
    DROP TABLE public.taikhoan;
       public         heap    postgres    false            �            1259    16967    taikhoan_id_seq    SEQUENCE     �   CREATE SEQUENCE public.taikhoan_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.taikhoan_id_seq;
       public          postgres    false    236            �           0    0    taikhoan_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.taikhoan_id_seq OWNED BY public.taikhoan.id;
          public          postgres    false    237            �            1259    16968    thongtinchung    TABLE     �   CREATE TABLE public.thongtinchung (
    id integer NOT NULL,
    masp text,
    thietke text,
    chatlieu text,
    kichthuockhoiluong text,
    thoidiemramat text
);
 !   DROP TABLE public.thongtinchung;
       public         heap    postgres    false            �            1259    16973    thongtinchung_id_seq    SEQUENCE     �   CREATE SEQUENCE public.thongtinchung_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.thongtinchung_id_seq;
       public          postgres    false    238            �           0    0    thongtinchung_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.thongtinchung_id_seq OWNED BY public.thongtinchung.id;
          public          postgres    false    239            �            1259    16974    tienich    TABLE     �   CREATE TABLE public.tienich (
    id integer NOT NULL,
    masp text,
    baomatnangcao text,
    tinhnangdacbiet text,
    khangnuocvabui text,
    ghiam text,
    xemphim text,
    nghenhac text
);
    DROP TABLE public.tienich;
       public         heap    postgres    false            �            1259    16979    tienich_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tienich_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.tienich_id_seq;
       public          postgres    false    240            �           0    0    tienich_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.tienich_id_seq OWNED BY public.tienich.id;
          public          postgres    false    241            �            1259    17059    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    17058    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    243            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    242            �           2604    16980    bonho id    DEFAULT     d   ALTER TABLE ONLY public.bonho ALTER COLUMN id SET DEFAULT nextval('public.bonho_id_seq'::regclass);
 7   ALTER TABLE public.bonho ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214            �           2604    16981    camerasau id    DEFAULT     l   ALTER TABLE ONLY public.camerasau ALTER COLUMN id SET DEFAULT nextval('public.camerasau_id_seq'::regclass);
 ;   ALTER TABLE public.camerasau ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    216            �           2604    16982    cameratruoc id    DEFAULT     p   ALTER TABLE ONLY public.cameratruoc ALTER COLUMN id SET DEFAULT nextval('public.cameratruoc_id_seq'::regclass);
 =   ALTER TABLE public.cameratruoc ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    218            �           2604    16983 
   dathang id    DEFAULT     h   ALTER TABLE ONLY public.dathang ALTER COLUMN id SET DEFAULT nextval('public.dathang_id_seq'::regclass);
 9   ALTER TABLE public.dathang ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    220            �           2604    17106 	   dulieu id    DEFAULT     f   ALTER TABLE ONLY public.dulieu ALTER COLUMN id SET DEFAULT nextval('public.dulieu_id_seq'::regclass);
 8   ALTER TABLE public.dulieu ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    247    246            �           2604    17080    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    245    244    245            �           2604    16984 
   giohang id    DEFAULT     h   ALTER TABLE ONLY public.giohang ALTER COLUMN id SET DEFAULT nextval('public.giohang_id_seq'::regclass);
 9   ALTER TABLE public.giohang ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222            �           2604    16985    hedieuhanh id    DEFAULT     n   ALTER TABLE ONLY public.hedieuhanh ALTER COLUMN id SET DEFAULT nextval('public.hedieuhanh_id_seq'::regclass);
 <   ALTER TABLE public.hedieuhanh ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224            �           2604    16986    hinh id    DEFAULT     b   ALTER TABLE ONLY public.hinh ALTER COLUMN id SET DEFAULT nextval('public.hinh_id_seq'::regclass);
 6   ALTER TABLE public.hinh ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226            �           2604    16987 	   ketnoi id    DEFAULT     f   ALTER TABLE ONLY public.ketnoi ALTER COLUMN id SET DEFAULT nextval('public.ketnoi_id_seq'::regclass);
 8   ALTER TABLE public.ketnoi ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    229    228            �           2604    16988 
   manhinh id    DEFAULT     h   ALTER TABLE ONLY public.manhinh ALTER COLUMN id SET DEFAULT nextval('public.manhinh_id_seq'::regclass);
 9   ALTER TABLE public.manhinh ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    231    230            �           2604    16989    pin id    DEFAULT     `   ALTER TABLE ONLY public.pin ALTER COLUMN id SET DEFAULT nextval('public.pin_id_seq'::regclass);
 5   ALTER TABLE public.pin ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    232            �           2604    16990 
   sanpham id    DEFAULT     h   ALTER TABLE ONLY public.sanpham ALTER COLUMN id SET DEFAULT nextval('public.sanpham_id_seq'::regclass);
 9   ALTER TABLE public.sanpham ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    234            �           2604    16991    taikhoan id    DEFAULT     j   ALTER TABLE ONLY public.taikhoan ALTER COLUMN id SET DEFAULT nextval('public.taikhoan_id_seq'::regclass);
 :   ALTER TABLE public.taikhoan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    236            �           2604    16992    thongtinchung id    DEFAULT     t   ALTER TABLE ONLY public.thongtinchung ALTER COLUMN id SET DEFAULT nextval('public.thongtinchung_id_seq'::regclass);
 ?   ALTER TABLE public.thongtinchung ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    239    238            �           2604    16993 
   tienich id    DEFAULT     h   ALTER TABLE ONLY public.tienich ALTER COLUMN id SET DEFAULT nextval('public.tienich_id_seq'::regclass);
 9   ALTER TABLE public.tienich ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    241    240            �           2604    17062    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    242    243    243            �          0    16896    bonho 
   TABLE DATA           6   COPY public.bonho (id, masp, ram, danhba) FROM stdin;
    public          postgres    false    214   �       �          0    16902 	   camerasau 
   TABLE DATA           W   COPY public.camerasau (id, masp, dophangiai, quayphim, denflash, tinhnang) FROM stdin;
    public          postgres    false    216   ��       �          0    16908    cameratruoc 
   TABLE DATA           E   COPY public.cameratruoc (id, masp, dophangiai, tinhnang) FROM stdin;
    public          postgres    false    218   æ       �          0    16914    dathang 
   TABLE DATA           J   COPY public.dathang (id, makh, diachi, sdt, hoten, trangthai) FROM stdin;
    public          postgres    false    220   �       �          0    17100    dulieu 
   TABLE DATA           �  COPY public.dulieu (id, name, dungluong1, ram1, gia1, dungluong2, ram2, gia2, dungluong3, ram3, gia3, dungluong4, ram4, gia4, thuonghieu, anh, mau1, mau2, mau3, mau4, anh1, anh2, anh3, anh4, anh5, anh6, anh7, anh8, anh9, anh10, anh11, anh12, anh13, anh14, anh15, anh16, thongtinsp, baohanh, phukien, mh_congnghemanhinh, mh_dophangiai, mh_manhinhrong, mh_dosangtoida, mh_mankinhcamung, cs_dophangiai, cs_quayphim, cs_denflask, cs_tinhnang, ct_dophangia, ct_tinhnang, cpu_hedieuhanh, cpu_chipxuly, cpu_tocdo, cpu_chipdohoa, bn_ram, bn_dungluong, bn_dungluongkhadung, bn_danhba, kn_mangdidong, kn_sim, kn_wifi, kn_gps, kn_bluetooth, kn_sac, kn_jacktainghe, kn_knkhac, pin_dungluongpin, pin_loaipin, pin_hotrosac, pin_sackem, pin_congnghepin, ti_baomat, ti_tinhnangdacbiet, ti_khangnuoc, ti_ghiam, ti_xemphim, ti_nghenhac, ttc_thietke, ttc_chatlieu, ttc_kichthuockhoiluong, ttc_thoidiemramat, masp) FROM stdin;
    public          postgres    false    246   *�       �          0    17077    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    245   ��       �          0    16920    giohang 
   TABLE DATA           P   COPY public.giohang (id, makh, masp, soluong, thanhtien, trangthai) FROM stdin;
    public          postgres    false    222   ��       �          0    16926 
   hedieuhanh 
   TABLE DATA           Y   COPY public.hedieuhanh (id, masp, hedieuhanh, chipxuly, tocdocpu, chipdohoa) FROM stdin;
    public          postgres    false    224   �       �          0    16932    hinh 
   TABLE DATA           �   COPY public.hinh (id, masp, mau1, hinh1_1, hinh1_2, hinh1_3, hinh1_4, mau2, hinh2_1, hinh2_2, hinh2_3, hinh2_4, mau3, hinh3_1, hinh3_2, hinh3_3, hinh3_4, mau4, hinh4_1, hinh4_2, hinh4_3, hinh4_4) FROM stdin;
    public          postgres    false    226   ��       �          0    16938    ketnoi 
   TABLE DATA           f   COPY public.ketnoi (id, masp, mangdidong, thesim, wifi, gps, bluetooth, congsac, tainghe) FROM stdin;
    public          postgres    false    228   Z�       �          0    16944    manhinh 
   TABLE DATA           j   COPY public.manhinh (id, masp, congnghe, dophangiai, manhinhrong, dosangtoida, matkinhcamung) FROM stdin;
    public          postgres    false    230   &�       �          0    16950    pin 
   TABLE DATA           Z   COPY public.pin (id, masp, loaipin, dungluongpin, hotrosactoida, congnghepin) FROM stdin;
    public          postgres    false    232   ��       �          0    16956    sanpham 
   TABLE DATA           �   COPY public.sanpham (id, masp, tensp, dungluong1, gia1, dungluong2, gia2, dungluong3, gia3, dungluong4, gia4, mota, baohanh, ram1, ram2, ram3, ram4) FROM stdin;
    public          postgres    false    234   +�       �          0    16962    taikhoan 
   TABLE DATA           W   COPY public.taikhoan (id, matk, hoten, email, sdt, matkhau, diachi, quyen) FROM stdin;
    public          postgres    false    236   ��       �          0    16968    thongtinchung 
   TABLE DATA           g   COPY public.thongtinchung (id, masp, thietke, chatlieu, kichthuockhoiluong, thoidiemramat) FROM stdin;
    public          postgres    false    238   G�       �          0    16974    tienich 
   TABLE DATA           u   COPY public.tienich (id, masp, baomatnangcao, tinhnangdacbiet, khangnuocvabui, ghiam, xemphim, nghenhac) FROM stdin;
    public          postgres    false    240   x�       �          0    17059    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    243   ��       �           0    0    bonho_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.bonho_id_seq', 14, true);
          public          postgres    false    215            �           0    0    camerasau_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.camerasau_id_seq', 14, true);
          public          postgres    false    217            �           0    0    cameratruoc_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.cameratruoc_id_seq', 14, true);
          public          postgres    false    219            �           0    0    dathang_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.dathang_id_seq', 1, false);
          public          postgres    false    221            �           0    0    dulieu_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.dulieu_id_seq', 1, false);
          public          postgres    false    247            �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    244            �           0    0    giohang_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.giohang_id_seq', 1, false);
          public          postgres    false    223            �           0    0    hedieuhanh_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.hedieuhanh_id_seq', 14, true);
          public          postgres    false    225            �           0    0    hinh_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.hinh_id_seq', 14, true);
          public          postgres    false    227            �           0    0    ketnoi_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.ketnoi_id_seq', 14, true);
          public          postgres    false    229            �           0    0    manhinh_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.manhinh_id_seq', 14, true);
          public          postgres    false    231            �           0    0 
   pin_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.pin_id_seq', 14, true);
          public          postgres    false    233            �           0    0    sanpham_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.sanpham_id_seq', 14, true);
          public          postgres    false    235            �           0    0    taikhoan_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.taikhoan_id_seq', 1, true);
          public          postgres    false    237            �           0    0    thongtinchung_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.thongtinchung_id_seq', 14, true);
          public          postgres    false    239            �           0    0    tienich_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.tienich_id_seq', 14, true);
          public          postgres    false    241            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    242            �           2606    16995    bonho bonho_masp_key 
   CONSTRAINT     O   ALTER TABLE ONLY public.bonho
    ADD CONSTRAINT bonho_masp_key UNIQUE (masp);
 >   ALTER TABLE ONLY public.bonho DROP CONSTRAINT bonho_masp_key;
       public            postgres    false    214            �           2606    16997    bonho bonho_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.bonho
    ADD CONSTRAINT bonho_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.bonho DROP CONSTRAINT bonho_pkey;
       public            postgres    false    214            �           2606    16999    camerasau camerasau_masp_key 
   CONSTRAINT     W   ALTER TABLE ONLY public.camerasau
    ADD CONSTRAINT camerasau_masp_key UNIQUE (masp);
 F   ALTER TABLE ONLY public.camerasau DROP CONSTRAINT camerasau_masp_key;
       public            postgres    false    216            �           2606    17001    camerasau camerasau_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.camerasau
    ADD CONSTRAINT camerasau_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.camerasau DROP CONSTRAINT camerasau_pkey;
       public            postgres    false    216            �           2606    17003     cameratruoc cameratruoc_masp_key 
   CONSTRAINT     [   ALTER TABLE ONLY public.cameratruoc
    ADD CONSTRAINT cameratruoc_masp_key UNIQUE (masp);
 J   ALTER TABLE ONLY public.cameratruoc DROP CONSTRAINT cameratruoc_masp_key;
       public            postgres    false    218            �           2606    17005    cameratruoc cameratruoc_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.cameratruoc
    ADD CONSTRAINT cameratruoc_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.cameratruoc DROP CONSTRAINT cameratruoc_pkey;
       public            postgres    false    218            �           2606    17007    dathang dathang_makh_key 
   CONSTRAINT     S   ALTER TABLE ONLY public.dathang
    ADD CONSTRAINT dathang_makh_key UNIQUE (makh);
 B   ALTER TABLE ONLY public.dathang DROP CONSTRAINT dathang_makh_key;
       public            postgres    false    220            �           2606    17009    dathang dathang_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.dathang
    ADD CONSTRAINT dathang_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.dathang DROP CONSTRAINT dathang_pkey;
       public            postgres    false    220                       2606    17131    dulieu dulieu_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.dulieu
    ADD CONSTRAINT dulieu_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.dulieu DROP CONSTRAINT dulieu_pkey;
       public            postgres    false    246                       2606    17085    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    245                       2606    17087 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    245            �           2606    17011    giohang giohang_makh_key 
   CONSTRAINT     S   ALTER TABLE ONLY public.giohang
    ADD CONSTRAINT giohang_makh_key UNIQUE (makh);
 B   ALTER TABLE ONLY public.giohang DROP CONSTRAINT giohang_makh_key;
       public            postgres    false    222            �           2606    17013    giohang giohang_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.giohang
    ADD CONSTRAINT giohang_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.giohang DROP CONSTRAINT giohang_pkey;
       public            postgres    false    222            �           2606    17015    hedieuhanh hedieuhanh_masp_key 
   CONSTRAINT     Y   ALTER TABLE ONLY public.hedieuhanh
    ADD CONSTRAINT hedieuhanh_masp_key UNIQUE (masp);
 H   ALTER TABLE ONLY public.hedieuhanh DROP CONSTRAINT hedieuhanh_masp_key;
       public            postgres    false    224            �           2606    17017    hedieuhanh hedieuhanh_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.hedieuhanh
    ADD CONSTRAINT hedieuhanh_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.hedieuhanh DROP CONSTRAINT hedieuhanh_pkey;
       public            postgres    false    224            �           2606    17019    hinh hinh_masp_key 
   CONSTRAINT     M   ALTER TABLE ONLY public.hinh
    ADD CONSTRAINT hinh_masp_key UNIQUE (masp);
 <   ALTER TABLE ONLY public.hinh DROP CONSTRAINT hinh_masp_key;
       public            postgres    false    226            �           2606    17021    hinh hinh_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.hinh
    ADD CONSTRAINT hinh_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.hinh DROP CONSTRAINT hinh_pkey;
       public            postgres    false    226            �           2606    17023    ketnoi ketnoi_masp_key 
   CONSTRAINT     Q   ALTER TABLE ONLY public.ketnoi
    ADD CONSTRAINT ketnoi_masp_key UNIQUE (masp);
 @   ALTER TABLE ONLY public.ketnoi DROP CONSTRAINT ketnoi_masp_key;
       public            postgres    false    228            �           2606    17025    ketnoi ketnoi_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.ketnoi
    ADD CONSTRAINT ketnoi_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.ketnoi DROP CONSTRAINT ketnoi_pkey;
       public            postgres    false    228            �           2606    17027    manhinh manhinh_masp_key 
   CONSTRAINT     S   ALTER TABLE ONLY public.manhinh
    ADD CONSTRAINT manhinh_masp_key UNIQUE (masp);
 B   ALTER TABLE ONLY public.manhinh DROP CONSTRAINT manhinh_masp_key;
       public            postgres    false    230            �           2606    17029    manhinh manhinh_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.manhinh
    ADD CONSTRAINT manhinh_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.manhinh DROP CONSTRAINT manhinh_pkey;
       public            postgres    false    230            �           2606    17031    pin pin_masp_key 
   CONSTRAINT     K   ALTER TABLE ONLY public.pin
    ADD CONSTRAINT pin_masp_key UNIQUE (masp);
 :   ALTER TABLE ONLY public.pin DROP CONSTRAINT pin_masp_key;
       public            postgres    false    232            �           2606    17033    pin pin_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY public.pin
    ADD CONSTRAINT pin_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.pin DROP CONSTRAINT pin_pkey;
       public            postgres    false    232            �           2606    17035    sanpham sanpham_masp_key 
   CONSTRAINT     S   ALTER TABLE ONLY public.sanpham
    ADD CONSTRAINT sanpham_masp_key UNIQUE (masp);
 B   ALTER TABLE ONLY public.sanpham DROP CONSTRAINT sanpham_masp_key;
       public            postgres    false    234            �           2606    17037    sanpham sanpham_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.sanpham
    ADD CONSTRAINT sanpham_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.sanpham DROP CONSTRAINT sanpham_pkey;
       public            postgres    false    234            �           2606    17039    taikhoan taikhoan_email_key 
   CONSTRAINT     W   ALTER TABLE ONLY public.taikhoan
    ADD CONSTRAINT taikhoan_email_key UNIQUE (email);
 E   ALTER TABLE ONLY public.taikhoan DROP CONSTRAINT taikhoan_email_key;
       public            postgres    false    236            �           2606    17041    taikhoan taikhoan_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.taikhoan
    ADD CONSTRAINT taikhoan_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.taikhoan DROP CONSTRAINT taikhoan_pkey;
       public            postgres    false    236            �           2606    17043 $   thongtinchung thongtinchung_masp_key 
   CONSTRAINT     _   ALTER TABLE ONLY public.thongtinchung
    ADD CONSTRAINT thongtinchung_masp_key UNIQUE (masp);
 N   ALTER TABLE ONLY public.thongtinchung DROP CONSTRAINT thongtinchung_masp_key;
       public            postgres    false    238            �           2606    17045     thongtinchung thongtinchung_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.thongtinchung
    ADD CONSTRAINT thongtinchung_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.thongtinchung DROP CONSTRAINT thongtinchung_pkey;
       public            postgres    false    238            �           2606    17047    tienich tienich_masp_key 
   CONSTRAINT     S   ALTER TABLE ONLY public.tienich
    ADD CONSTRAINT tienich_masp_key UNIQUE (masp);
 B   ALTER TABLE ONLY public.tienich DROP CONSTRAINT tienich_masp_key;
       public            postgres    false    240            �           2606    17049    tienich tienich_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.tienich
    ADD CONSTRAINT tienich_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.tienich DROP CONSTRAINT tienich_pkey;
       public            postgres    false    240                        2606    17068    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    243                       2606    17066    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    243            �   �   x�}���@��^WA{���{������
$��Iv
̘ofF���T��Fy��6ߖ��.~����x�<�G)�'�$�!Ð��^$1ރ�<_�+��@;3���0�T��Є��(фO@�&t������      �   2  x���O�F���_�NU��*NB�f���6K趪z�73�=v�c��PUj�=��.B*H*V��=�������$`'�4�Pq	��y�}�7o�i�V���ꄟ1�*l5�3h�(<��-u�'�ހ�b���T���TXLi�*>��<~W~E�������rI�[,c;W�繆m�9��ԣ6��Ǝ
�.�D�M�Ѵ�:Tg�ߥ����K*|����Q~�����2}Wߧ{����mA7
/p� ���Eao�m�����u�K�i[�W�~ m�,ȷL{�l-ï���:8�b���h4���Q�-�7uf�������N���C��/��>jC��F�G���cG�W�.��Oq�m�!>�{��a�(�Ml�5_�p�����
����δ}��M�,~`7Kw}!0,+E�AqH���>�N�Bb�R������d��R�-<0䉗��$x)=���K6^ʂ���B��Ҁ�j
.�f)����C��շ��(��IG�]~�,�W?���L��]���3�y7
��ߌ��������d��Ip�O���蝃S���:��\l�CKLҿ@	�	?b��?�j�h!�]���l��1QE�y7(Q���`T%�n#�N^���I�)qWr�:�-���r��"V���t�iŴ@��4Η��cKM���YY�Y�O��[bLK�:Y>��(M�����1\H��9KV(�q<�m�>�՜N�4�WN_Yz������b�����1u,of�����I>�����b�&T�-
<���'���ky8o����M��
�:;Ӷ���u�p���a]�Qx�F?��I�D���A��r���P��u��h=q7����S4M0��3�Ů=󪦍e�����j��0nGso�.5����p���5$�1�b	G�D�L���i��y[8Iza�y{��x��^��R4QFҮ�H����;DK�������򿈄m"s���.	p<����4.bc^�]�(<���?���xN�i��&��tO�[�H��LH�J�6�Ru����/�7�����-P�U	'::�db��w�+���J��      �   :  x�Օ�n�0�g�)�hB`�'q�$���N��.С�&a�4�� OЩC���C�,�F}�I/�µl�V�d�BX&u���Hbt�21H���0��m����-��`�,�ʡǩ�R��� �,p�j ���u`�ۄ��	?�$4��R�����.���׆N�ݾFVna�����S��gC��x�0K����Y�م@��*�������jFu����,������a���5��_׶�0г㻁��YMٕj(��Ɨ(\r��!�u��Ku�B��u��W���Y��uu�Q<�U�m˹[�����S�\�Ņ;z��Sv��WC{nL����:c]��tw���߬
�ÅPD^L���\Ph�4b��}�Rv�9�e��:�<�#s)�<޿ݮ-��2��P)?�~ܯt��&���G>�Y�)�,a���ﱙS\'��r�mBa�c�;�\���,�D_E8��x£l�+�m��pz}�P/D�ʱ~������f��h��T+�oXug��z�a�/8D(݃��8���p U�^�1?l����}�      �      x������ � �      �      x���o�ș�_���^6*)"E�G_�b'�;Vc��+�-����(�]ܛ^p(�b���P,o��m�mw�bm}�ܾ�?����!5CiYq��vD29��p83�g����4�F7���tXc�-�Ȱ���M�(�j�"�3Ӣ�86w��.�#�'�X������0o:��0��ݣ�~o�·�q�o�/�G�����녮ώ\�+�������7�܏��O���K_?i�i)�eJ��X�
�S�q2��SӍ/HK;� -����<|�����i��д�yhZ��=�y�Q��^��ӝ�~�~��޳w~�Kx�����ă�g{P1�O���y~��eT�Xs|~��c��7~�5��%|�~2yƚ��+�����l©o�x~��Ɇ.&�e�'O������h�
lK��?yz�F�g�2���1��w����D�;��u�1�_?�!�H��*�Y7+��9֟<�Yw�~������4?�\�����ې�����S���#���!��;yFO����<􍛐I���3����}�9?�m�G�rlgr҄(0Ώ!�<��c��ώY����x|2`�ǃ6[5�7o�;�A{��C�w�õ�lٴjEvĬJ���Q�7Z1ʅʿ�<�=?}�c�=a�'/CfZEv���pdܥib.>�\���7�*<~�k������ʟ֮���k�Kx1�Q�w�X�*��T��`�c�ǽ�2�U8W֜��w�e�5���]f�0^ˆccu����ٞ7����Y��c����X1]Q�>�Xǃ�jy��٦;�Wrl}�UJt������Q���C����?�>;8?�����
���m�������̱���c���ly�|���rW=�|��|�wrl��@	`�!���&֌.[n�~ ��bĐ�'��p�]���6�����租���r�&�ē�!�{^�B������}Yܡg������I{9����e!4
��=���n���9�ҙy���gT�!�a@��R���=lQ�}��l
��=�(�w��� ����̊���9��0^?ƂjN>�������P����]���R�X���`�c@����gϘ�n���\�����dm��x��o{lkck;�X���㧪E�`�̽��sÿ�6o 	ܼ����<�Owv�t�ÍU���{}s�^O��776om�N�d`G�_��۶,֯w�M/���������Bv��V�<��;��&�;��>�Oւ�(
�N����?k[�!t��	|�!;ҿ���l��5�}{Ȼe���NN�®�Q�D�n���5�{��ȧ��kV�^36媱����>%Ӥ*�k��;�l/o5n�����ꊱ�(�X�%u{��j�댏f �h��a��,��7���h�Bcm�zt�V��~z�{��_����j�rD0��e��!����(�K�ji�QU���A_1}e�,q�I|o��RI/��R	/��BL<�����M\��A�]^�	/����.��҉.��d�Ӆ�tv���������:�)�g��g�;3@��D@y�{Tg�>�ʐ&۽)���DK������@J�#�O_��Ǣ@bz�F��%��j���Z��.AE�IP�,���x��������p�1�cA���#�B޻n|gVj�w�#�y���xM�䱖��� �:p\�Z��#~��\D��=~��< � ޻�j���=?~�~I��˅��~��X�~f�����T�ѯ7�����`�~�<D��;�y�:�}
�=Ķ����ߢaG�$��z������m����^�L"	x2�;�'��Hn�\�=��K����|�8�T'+R
��~L����4 Tу�������T5-Ѧk�z�*Ӆ�~��B���X��cj�N�+~WӐ�
X�a���eS�d�z�*x'm9U�㊡����P����F Oh����q��~�D����`���P\8$������~�������
�}�l��=|�/삭	�H =�D%A�����q�%t�����=&~�����R�&T����#���ڥj鍸B�}�i�����i�\L��BU���(��	��dۍ�6t�~`�vAE h������F0�!�@�Ng�>��{''}cw��&�:r�yS �.��RI�jCBS�R��)a�>%�)�Ţ!�y���5>N��%Y^�	t��$���C�Q��`i����x!m
2'�k?~�M�¼c-��q�!u�'|�����-�r�n?���uX	����fO���	Q�n,!����s��`v����yA�9j�O¤ �]2����or
���&�'%�d�b�x1�WՍ�q�0?��@�����9Z����*[����Њ��)��S��S��Ot�㞹�D�u$S�t������3?��
���Qݞa��]wD4�k���X��^I��.���5�$9Vr�f)gs�/ZtE�A�f�͢�|c��~D%o�	���܈���*H���~kx-f�U��Ak�v��+��:��UEV����ޜ�mk�P"�Rm>R�bRR ��]��X�� �h�������]�ŖE�n8����_M�'+�Oۻ�9�%�lp�S� z�)�He*^ڼ��hno{{U��C��Cx�-�H=�� *�ˀ����_��������ū�Ƿ�f�cv��5v�X����k��Z���h>�ⓡ'l��O�Yb���1"'?�����Z�='
{	��A�4�����Qt������_� p�d}��E����>b�`&]l�_˅�;�'���c�q��.��=�3��'�J�<P�a]�������
���H9�B �ul=�B�����j�68�n�CM��Z^6�[h 7�Z�PR��.X*��T��:*��K���s���ӂO�2Zvɶ9Т�Y�����#�܃����y��	�͇K�3��$�!Wd�9�AemfU���S�}B�O�O��B��`�>)�4�xk��#�L�_ǃ��Z��,Cc��7:�T��B�v��M^!(B/? �Ŏ���&e[���؝v��z��ȏչ<��Y�>uJ�1U����5�b�)��S�������{�g^�
���!��b+��iL�/���0pk������*D�k�������rQ���kDՎ��*CX׃���l��F���*�������*+Ĵ�f�k2��� �^Aη�&E�	���YTIi�M}�tԴ�)	�ܞ�_w,>�jZ��t�@[�@y��-��A�M*�g�#E0[ /��J��34��F����`,�Eo?L^�E�&��_�WK�Wwo״�cb�1�ӓÐh8�����O�U�tє�_���)�r��*s�fE�C�UDX嘰������G�`���*�$��e�P\k��w���ܣ�[t��79Q�
R�#]i���.�u�i)7l�r�0�ߠ�xʢ���G���x�L> 	��E���ܾ~9�4'+^xD*�����TeO����Ä_����;�v9�қ2Pn�n�i��F+���;�Zc�C ���`�M��7��T���_o��nZ:��e��������p�n��C�Y�މ-�Ϳ������3f��2�-3 ���R��S}4V�
�|Ұ[N��t��-2�ϱ�z��{`���%������u?��B���T���v+�FU	����2k	��T>J��7Y	�&;��d���Dn3�d��5�LZ'�i����F�t䑂f<��"�zIAsG��
������i2�.�Ϭ���5�@��fU�	�qu�B�7��^^�2
 Ǝ��8���䯑�wx~�E�O*�ǽ���'SN+��7i؉����4P�X��^�E���(d������ꍄ-�W�\7�w�S�r�>:��k��n��P��e�ꕚ�����V�}��%<��|W��C)������"�߽4���!�w��]Y�{�a��ͬ��ؼ"���V��x�q�c�B�-�Crr�!��%xF|�����	��
h��� '=����4�t��M@ �  YV�=�&���$���è��	�J�>�&4�=���ϧ�a�A��Id���A2K��)�ϣM
��G}柟}�^�h60(�lINA1���{�P�ewk��~	�]���:�!Љ{ViF���h ~�$��	E�P<|�r�Q��	��V�!D\�D�w�XsE�1sNQ(�YF��պ���5���|B�5#T��*�0�J���'ń�����h�M"LG3��O4m���zo>����3S_��]8����I���VÂ;�H��CS�=w�~��%K�)%�q
vI�b-<ex�K�X!�㍫"ݧl��O�Vu�,�i`f�i`O7cJ'%>e��g0Bl�u[3�vv��\��f�-���RΗR��
0�;y=~�N#�A�W�I�5�hLts�poN��� ����~X�FKP��/\�����{œ�oE l>_k%��E_h�^�b��v�����%�4䮁{8ǋ�ξ�M��d�s(r?Uwr�"��®�6�#F\��q�P-	�b,D��+F�m��}���d�o��eW�%�S��l!ͩ	MCHQmo��Q��i��rF0�(v�!�gJYEV���2�	@C�w!n��Y��;�"5)��2��S�bq�"�ŗ�Y�Y�i����fHu�Q�[l �n.y./�P������r�E��2��*�Ekeս7�{��#ڳ��jKf1�5K�X�B93�����HY��:���p�
��(�o|��{���0'#��ӧ�OC�L�3��əXg�x��3����ȋ��g
	B�76�W�·+󭡹�hNM������xG�����wKsz���~|��c�p�0��C����pт@���"���0�OxƹOr�%.�l{M7�]c��MC+�|4�}r,2)�� h]w ���,8w-��WN�D�&J,gS��!��+tt4.���{�.¼=��lu^�ts��5��Bb�FVd�4��[���P����^7��vWÑ�@y�����_���9!�,�V�jW��*�0/{�
h���J�k�����Y�qy��@�\-�7�@��	o.K�H�@ʾX�<ݗ^�w��*&I��n�A��y+� c��Iәu}	��rx�>.f�7^˗)�*�Q�B����M����Z�^�2������ڹ(x�_}�'�����|���������2�k�)��]*My���n�Sx��n(���n��/�@1c���$Lj��[7�2��կ��~�p���qR���LWZ	uX���&qx���
�O8S�����E��:�Uf���p�$$��%�L������-e�:u���>�J���3�}��\�+6���22"☞q�}��E�3.��4.���ge`��>����>�g���Y�cxj��aRJ`j��aSJ O3�u!G��3F����g� 9$JB�4'&	��V��h��c���
7�����h\��6@� |�GH��"�J��G0H�ċ8���)N�ջ���L��m�_Oc��'5��g��P�ʱd���,�۴X�2�1�}D���n��_T��RR+_��F���(mē�K�t�v�<]�[�q�4����Y���Az��o������)DDnq��)�['e���fσ��jV1�вtY.�@AR�x�Ne�݆�ji�g��#�k,�E�ef�x��T~}/脡�sd�nzG�Ǘ���V˧���]����7RA��}�-t<�_�K��#�~Р��!����θ�ǥ8SO�E�<aL�FD�*E5���Q�V[��X�����%���՝
pu�:����T���\��p�>���P�4�7ـ^���r�;5�I)�!��j�)7���cH�%>o��wR�Oex������?b#1c��ι��B6��]54��p�@b�
�,F~6���4w��@�Kʈn�;�{�b��$��L֥T�v���@9�&�0��{5�I��ͧk�7u-�V��JZnD{��ҽL��Ʈ���-��.����e��x�[�IO�ꅍy���fNK��i�4Tcck�5��ý�l�Vh\u05����]ۻ��bZ*u��e�=��IUr�N�DL6�K]� AY���u>iu^�R9��iɝ��ٕ94ʌ��d�J��7ل,�CHB��*[��c��T�~߱���ZJ��Œ�PK���ڜJ�`ZK0��5"{0  Q���f�0^�sh9y��M|�c�8��4��n����l�9Gs���K���Nٳ���S�
,�3��4�I�A]�� �Vz/�9\a;]�+��.ԥ��Q��6L���Sؐ&�km����;���uH�qZ	GT�-������� 4��Tn�E9�V�����G?pJ����I�s�wD����	���������C��ڬTp��+[��S1�n�7�-ڲ��W��Vaf)�v�v�!{���S�{������]BNS��C���!��{|m������"F)θ����y�|��Yp�4����tZ��U��E�*m������3�اCT����W2j l\\�#G9��z���SW���M#��N,�R����\z�+��E�&�$� i�@���F{�]j{�E`�-�)�V\�d	؅��&�����G��'^���xo�~��^0��F�ȊNm�{�V憿��/�Xե%�V����m���/tv��=_�����\%oc����ӫV����;��_�x��u^����/fwÕ�5������t�`�ƽQ��{����SxF���~�=P���K2ˀ_�Y����c�>��ƪ�ig=��*�-�Hi��>^���P^���u��ƾJ���5������53�Sm�}�op`��]�j��;�wf�zq_^1�m-��{���~<���p➖W\�ͺ��JEa�5>4H�5�[���eyɹ���~�L(�� Ĥ�E�H~��̂�U=��A]V����k%K�`kO6���}�U��[h�<�P.'T�Z��Z�;���|��������[H      �      x������ � �      �      x������ � �      �   �  x���Mn�0���)f�U�b'v�%U��TTTJ�E7���ԉRKO�3�Q�C�&!�b�f"�5߼y��Π�aG= �N;�S	mB�Ȁ�~[ε���1����"_�V���$"�F.E�-�?M�݀��~WϢ?Z>���N['E����<)�q�!� *�W�%&)�6���#j�	��D�O��2U� o�ũj	J���d5�����`��.�憖ZW.`1�0~�H�'�YnT���*ܨL��9�ÞA�pHڭ��z��3���Z�tZ����.��k�7�GIC*���v��N����&@�����m>q鑝��R�O$D�t��aB݅�Y�7�vת����~�)��G�[�=�����r*+vV��G�^>v-��T�m.�8��"�� H�Z�      �   �  x���Kn�0���)r�L�β]uY�A�E7�=[v�[��jtW�h�M���%|�rHY���M��|#�C�pH������*).vI���,f�rUFy����F�����S0���r�|u|�}Q,���q�6�d����q��i���VT����s��H+za4�bє
DS3���3lQ�Y2���(��:�0�:��: k��?����{ܟy���r�b�\��O��;���7�k:�f�1�$�>$��ȴ_L�~=틹���~_�/e���F���8��qc���D+e��3U��SH��Z���+�!0Ŋ���_�<g��i�P�ޖ2Ã��>�岌V��d=��]�G��؀$C��t	~�rU
r1�*0\.D�5���V!�4)�T�9�O���Y���H�HG�R�r�8��	!����j�2m<m�Fp1 ��A��� �w�l��EO����v�����8��mbc8P5|�)�!�;
s��GT#1P����E���:[�7^�%�)ލ�1�.t&us�*��nݦ�2�cõ�n`J��P�i$h�KI-�:�l��v�+6����YS���`�Wz��e��uf�Y-3�Hv0�c��ƾm�L�����>a�ִYO�[>������p�qf�Z��K�b���9}�dt�v���h4>�`��F�U�N��FNo�d��.Z����̜�ǁw9�.����Ž�i��/�(�'�u}���ng�8��� �x]ap�A�΅@@R�\T�!�o�P�n)�F\zg+C#�$�$�~j\T]T�M>����P��
~{�Z�m�Bh���9a���*�5 ZR��m,����Gl�ۼցq2q�$\�}<0�,���ܺ%|�����ޓL�\�L�ܲL|�mN�_O���4�=�(�	Fq�s�Q��wY��wi��wy��Qi�.�0��h"�      �   �  x�͕�N�@��ӧ8+����rY"`iR(��`C�%X��".\�.L`��M�	�eB��LϜE�;��`du�5��+��h���0�m? Ko�	`p����ܹ-�e�P��"��U�	c��ܗ}����:k�u�J�����&zM�Cm�0�U�Ԫ�n4L4Q��|:���#E����`
�Fa0
C~`V�vqiԽ���77�����C�k�w�!�°e��Y�����CT�GT∐a��;��p�:��t��޲(!c)��� �0E\LF�ҷ��D%FTJ�r����ޢ��z��^-'���N�saV؃�=���`gڐ|�뻡���_K�y
G�C&m{�%�DX%��FCʪp%ØQ��67���=�%�t�\�+�)[�_[��Pق����S��HZ��l�`%��'�$4�kh�I­$�7'�u�      �   �  x����J�@���S���lv7�Q�b��(��%�`q�I
�[� �Ń�W{|���ٴHI�*xY�%�����$�����G��u�� �c���&r��-p�U�ǷQ�mձ7`N��O���n��9 gppO8ct�g���E�a��:�=�KH泷t�4��G��(����G�5���<�o����j]]����ߟ&	xۅ˜���u����u�;�	�0�TU�C?�~��-���n�떬��q'�����$��$�^fXT�
���
J���F��[-m�LS���͕cx�Ǖ��K��%�#*d>^��5�w���"+��X.v�Q�B��S�%��������H�;]�����f�-�:P��	(֘��Ê㗗��
?�!E����yc0���>����
��$�a�,�㉆3��YXض�*������kܽE�;��/�FV      �   +  x���=R�0�k�)t `�����&�1�'[P2���s URPx�{�&h;�'6B�
I����
Y2����e"�g���r�6�cS.����=����!���K�|�q^�ڌ_�w�ާ%~�fIz9Alэ�)	)��t����AHh0a1��4�nM�<_��d>ݜ������+
�॑��w8�~BB�R��7�DTQ�տ�uL̸f"EA��9����W�����du1a�L��n�T��z��۟�� �G@QE���{i�,�IGYgVʝ��y��FU��ft� �/l�L      �   �  x����N�P�g�)���\r��h#ZU u��j"��D/*33�P1�0�/�7�NNC2�$�K����m�Q�"�Q�g3�FD/���w ���Ra��%��Mq���`:����%"9|fsq�HO?�X'��{�
��mI�#(�@@�����e�M�WgK�� +&�:y�Y�Ѧ��*�hݥS�<�(��Y��[��-U�
�+xH�|���3E�@u�RP��R�W7���>����x�x�/W��`l�����e��>+��4�����us��e�����\<����}+��u���Vk�����x��J������~��%<�=�1/`5"t�˛��pQZ�"�ce}?^ĻW1�J�ޔ���Z9�|����6~͑�R|����D��2��=!�*��A�������ئK���i3��zvܼT���q�_a��      �   O   x�3���00�<2����
Nw-�W8ܔǙ����琞��������i`lbjfnaih�ihdV>9/]�/1�Ӑ+F��� ��      �   !  x�͕�j�@���S�UI��Es��0�vٍpA����C_��>@�馴P�B /y�I�X��$�B�Ό�����Ţ��(�.����Z�"o��h���^uZ�#x����P�_�ڢ�V�0��n��,��yt�|,�IK,,��.���"��q�p�����>����'�rs��	H���@�aF�@�� U��,D��ML�X�}CǑ�q�J:rP�Dx�	ᾲ����IK'-�V��+g?Ӿ�֐���ԕSW��l�2�k�#��lf�'�NS��g��K(W��U1� :� $I�G@m@�z��a�:o��ƥ���ݾ��Y��,(�#�tH��ǌ"�R-�|�prܺ�ëԍ�
j|r�0'<��Ϭdg��̽�������,=�7�a�)f��񙣭���$�/N�
�7EY�p^��� �k���~�Qc�]F�l.|�H�|���7P��v�}��W���Txwm�܍��ߵK`6���NI��-����F��	\����=I�
Nn'���e_���K��O&�o      �     x��X�n�F>�O1G	�SS�縦ٵYV*��E	�""隔Q���(ZrrH�h]��� �聆ރoҙ�%oE�vѠ,B��ٙ���Y�J�Z�3���#7H:��N^����ܷ���M:�<��pl��ݎ��](6�����j`&/|p�_|ZB������� �/*;���Rr9$/=q���������z!cZ[��
�YŴ�0fhp�j��ͽ/������bm��-��'/Q�}��E?���G[�{�i�+��f��	�?J�(��|���9�_��u5��⣴C����P���i�B�i�-
#������C��V���P}&�N�)�BI=��ǣ��2��Z�=�q�|��h<p��$��W<�*� jp�=�K6mx��6"����J:���C�M�k@�M��?0��ώ��8���t�o�S�%�8�T�D�T	�VOb9�Ț���ӧ�~����:�"��hm,�� �=Fh��o�?7L�� v,^xzt��/@�P
�f�,yپ�'?<F�'���ĺ����A�d��ne�T\��̃�UFL�K������A06Ȫ��+Gh�Qp̗��Hi*���\��%#tó�}�Il�ʹr���%�F_u��{�ߤ�[��;<�<�����d��̨���$~,ۜ'�U��7Q�HxF�pE��?k���m�(�^aЪ�@��ř��|��W{�*�� ���|�k�y0!�n8w�A�]My�Z����`�x��~p�Ԡh���L4)�Dj���nm�J�(⬺��:�M_�mp`
���7q*�^��-�����|��*2��x�[�^+6���sX����P���/HQ�GVGi�;XFv@�1WS��/5���*�@�.=�T�����St}�Δ��+�)�u�Z5kǓ�\.Fg�4;C�O��0g�?\fLE��Vu�����o|��{K��[i�SSٲ�X5�.O��	j���,F(*�Q���N����1��0�=FxV5+�{CϪ&����"��UU����      �      x������ � �     