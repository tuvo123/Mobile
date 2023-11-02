PGDMP     "        	        
    {            webDH    15.4    15.4     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                        1262    16402    webDH    DATABASE     �   CREATE DATABASE "webDH" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
    DROP DATABASE "webDH";
                postgres    false            �            1259    16648    dulieu    TABLE     i  CREATE TABLE public.dulieu (
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
       public         heap    postgres    false            �            1259    16653    dulieu_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dulieu_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.dulieu_id_seq;
       public          postgres    false    216                       0    0    dulieu_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.dulieu_id_seq OWNED BY public.dulieu.id;
          public          postgres    false    217            h           2604    16655 	   dulieu id    DEFAULT     f   ALTER TABLE ONLY public.dulieu ALTER COLUMN id SET DEFAULT nextval('public.dulieu_id_seq'::regclass);
 8   ALTER TABLE public.dulieu ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    216            �          0    16648    dulieu 
   TABLE DATA           �  COPY public.dulieu (id, name, dungluong1, ram1, gia1, dungluong2, ram2, gia2, dungluong3, ram3, gia3, dungluong4, ram4, gia4, thuonghieu, anh, mau1, mau2, mau3, mau4, anh1, anh2, anh3, anh4, anh5, anh6, anh7, anh8, anh9, anh10, anh11, anh12, anh13, anh14, anh15, anh16, thongtinsp, baohanh, phukien, mh_congnghemanhinh, mh_dophangiai, mh_manhinhrong, mh_dosangtoida, mh_mankinhcamung, cs_dophangiai, cs_quayphim, cs_denflask, cs_tinhnang, ct_dophangia, ct_tinhnang, cpu_hedieuhanh, cpu_chipxuly, cpu_tocdo, cpu_chipdohoa, bn_ram, bn_dungluong, bn_dungluongkhadung, bn_danhba, kn_mangdidong, kn_sim, kn_wifi, kn_gps, kn_bluetooth, kn_sac, kn_jacktainghe, kn_knkhac, pin_dungluongpin, pin_loaipin, pin_hotrosac, pin_sackem, pin_congnghepin, ti_baomat, ti_tinhnangdacbiet, ti_khangnuoc, ti_ghiam, ti_xemphim, ti_nghenhac, ttc_thietke, ttc_chatlieu, ttc_kichthuockhoiluong, ttc_thoidiemramat) FROM stdin;
    public          postgres    false    216   �                  0    0    dulieu_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.dulieu_id_seq', 1, false);
          public          postgres    false    217            j           2606    16692    dulieu dulieu_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.dulieu
    ADD CONSTRAINT dulieu_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.dulieu DROP CONSTRAINT dulieu_pkey;
       public            postgres    false    216            �      x���o�ȝǟ���
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
l���e�D�>�MZ#sߪj��`�wt3��?�`��v��%����/�n����:x�A�j�_�ǟO5���D�=��f�}g��V�O�d������WVl�++����߼M�H��3�����ý2��_�Y���r�����5���4B��H;�fR�﹆���s^���"���R}��6��U���ϰ'{��\1�>Wd�C��_��Ζ���Em��F��B�r�]1�m,�{���z4���p��VQ�C̪�J�`	3ch��X��[������\LȆ?n�'����w�[�_R| w%HcaI��Z��g�.�ߩY��;������/[�����ndy�-�)�U��6U�\I��*|�V�O��{�w��?QLd     