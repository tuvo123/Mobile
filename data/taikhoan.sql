PGDMP             
        
    {         	   webmobile    15.4    15.4     F           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            G           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            H           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            I           1262    16895 	   webmobile    DATABASE     �   CREATE DATABASE webmobile WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
    DROP DATABASE webmobile;
                postgres    false            �            1259    16962    taikhoan    TABLE     �   CREATE TABLE public.taikhoan (
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
       public          postgres    false    236            J           0    0    taikhoan_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.taikhoan_id_seq OWNED BY public.taikhoan.id;
          public          postgres    false    237            �           2604    16991    taikhoan id    DEFAULT     j   ALTER TABLE ONLY public.taikhoan ALTER COLUMN id SET DEFAULT nextval('public.taikhoan_id_seq'::regclass);
 :   ALTER TABLE public.taikhoan ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    236            B          0    16962    taikhoan 
   TABLE DATA           W   COPY public.taikhoan (id, matk, hoten, email, sdt, matkhau, diachi, quyen) FROM stdin;
    public          postgres    false    236          K           0    0    taikhoan_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.taikhoan_id_seq', 1, true);
          public          postgres    false    237            �           2606    17039    taikhoan taikhoan_email_key 
   CONSTRAINT     W   ALTER TABLE ONLY public.taikhoan
    ADD CONSTRAINT taikhoan_email_key UNIQUE (email);
 E   ALTER TABLE ONLY public.taikhoan DROP CONSTRAINT taikhoan_email_key;
       public            postgres    false    236            �           2606    17041    taikhoan taikhoan_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.taikhoan
    ADD CONSTRAINT taikhoan_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.taikhoan DROP CONSTRAINT taikhoan_pkey;
       public            postgres    false    236            B   O   x�3���00�<2����
Nw-�W8ܔǙ����琞��������i`lbjfnaih�ihdV>9/]�/1�Ӑ+F��� ��     