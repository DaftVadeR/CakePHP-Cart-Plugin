DROP TABLE IF EXISTS users;
CREATE TABLE users (
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    title_id INT(5) UNSIGNED,
	email VARCHAR(255),
    tel VARCHAR(40),
	password VARCHAR(255),
	first_name VARCHAR(12),
    last_name VARCHAR(125),
	last_ip_address VARCHAR(40),
	created DATETIME,
	modified DATETIME,
	PRIMARY KEY(id)
);

DROP TABLE IF EXISTS cart_carts;
CREATE TABLE cart_carts (
	id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	user_id INT(11) UNSIGNED,
	session_id VARCHAR(80),
	created DATETIME,
	modified DATETIME,
	PRIMARY KEY(id)
);

DROP TABLE IF EXISTS cart_cart_items;
CREATE TABLE cart_cart_items (
	id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	cart_id INT(20) UNSIGNED NOT NULL,
	item_id INT(20) UNSIGNED NOT NULL,
	PRIMARY KEY(id)
);

DROP TABLE IF EXISTS cart_billing_addresses;
CREATE TABLE cart_billing_addresses (
    id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    zip_code VARCHAR(255),
    title_id INT(5) UNSIGNED,
    address TEXT,
    town_city VARCHAR(255),
    province VARCHAR(255),
    country_id INT(5) UNSIGNED,
    user_id INT(11) UNSIGNED,
    is_default TINYINT(1) UNSIGNED DEFAULT 0,
    created DATETIME,
	modified DATETIME,
    PRIMARY KEY(id)
);

DROP TABLE IF EXISTS cart_countries;
CREATE TABLE cart_countries (
    id INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    code VARCHAR(2) NOT NULL,
    name VARCHAR(200) NOT NULL,
    PRIMARY KEY(id)
);

DROP TABLE IF EXISTS cart_titles;
CREATE TABLE cart_titles (
    id INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    PRIMARY KEY(id)
);

DROP TABLE IF EXISTS cart_orders;
CREATE TABLE cart_orders (
	id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	user_id INT(11) UNSIGNED NOT NULL,    
    total DECIMAL(10, 2),
    items INT(10),
    status VARCHAR(40) DEFAULT 'Awaiting payment',
    created DATETIME,
	modified DATETIME,
	PRIMARY KEY(id)
);

DROP TABLE IF EXISTS cart_order_billing_addresses;
CREATE TABLE cart_order_billing_addresses (
	id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    order_id INT(20) UNSIGNED,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    zip_code VARCHAR(255),
    title_id INT(5) UNSIGNED,
    address TEXT,
    town_city VARCHAR(255),
    province VARCHAR(255),
    country_id INT(5) UNSIGNED,     
    created DATETIME,
	modified DATETIME,
	PRIMARY KEY(id)
);

DROP TABLE IF EXISTS cart_order_items;
CREATE TABLE cart_order_items (
	id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	order_id INT(20) UNSIGNED,
	price DECIMAL (8, 2) DEFAULT 0,
	name VARCHAR(255),
	description TEXT,
	created DATETIME,
	modified DATETIME,
	PRIMARY KEY(id)
);

/* Test data */

DROP TABLE IF EXISTS products;
CREATE TABLE products (
	id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	price DECIMAL (8, 2) DEFAULT 0,
	name VARCHAR(255),
	description TEXT,
	created DATETIME,
	modified DATETIME,
	PRIMARY KEY(id)
);

INSERT INTO cart_titles (name) VALUES ('Mr'), ('Mrs'), ('Miss'), ('Ms'), ('Dr'), ('Prof'), ('Rev'), ('Other');

INSERT INTO cart_countries (code, name) VALUES 
('AF', 'Afghanistan'),
('AX', '�land Islands'),
('AL', 'Albania'),
('DZ', 'Algeria'),
('AS', 'American Samoa'),
('AD', 'Andorra'),
('AO', 'Angola'),
('AI', 'Anguilla'),
('AQ', 'Antarctica'),
('AG', 'Antigua and Barbuda'),
('AR', 'Argentina'),
('AM', 'Armenia'),
('AW', 'Aruba'),
('AU', 'Australia'),
('AT', 'Austria'),
('AZ', 'Azerbaijan'),
('BS', 'Bahamas'),
('BH', 'Bahrain'),
('BD', 'Bangladesh'),
('BB', 'Barbados'),
('BY', 'Belarus'),
('BE', 'Belgium'),
('BZ', 'Belize'),
('BJ', 'Benin'),
('BM', 'Bermuda'),
('BT', 'Bhutan'),
('BO', 'Bolivia'),
('BA', 'Bosnia and Herzegovina'),
('BW', 'Botswana'),
('BV', 'Bouvet Island'),
('BR', 'Brazil'),
('IO', 'British Indian Ocean Territory'),
('BN', 'Brunei Darussalam'),
('BG', 'Bulgaria'),
('BF', 'Burkina Faso'),
('BI', 'Burundi'),
('KH', 'Cambodia'),
('CM', 'Cameroon'),
('CA', 'Canada'),
('CV', 'Cape Verde'),
('KY', 'Cayman Islands'),
('CF', 'Central African Republic'),
('TD', 'Chad'),
('CL', 'Chile'),
('CN', 'China'),
('CX', 'Christmas Island'),
('CC', 'Cocos (Keeling) Islands'),
('CO', 'Colombia'),
('KM', 'Comoros'),
('CG', 'Congo'),
('CD', 'Congo, The Democratic Republic of the'),
('CK', 'Cook Islands'),
('CR', 'Costa Rica'),
('CI', 'C�te D\'Ivoire'),
('HR', 'Croatia'),
('CU', 'Cuba'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('DK', 'Denmark'),
('DJ', 'Djibouti'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('EC', 'Ecuador'),
('EG', 'Egypt'),
('SV', 'El Salvador'),
('GQ', 'Equatorial Guinea'),
('ER', 'Eritrea'),
('EE', 'Estonia'),
('ET', 'Ethiopia'),
('FK', 'Falkland Islands (Malvinas)'),
('FO', 'Faroe Islands'),
('FJ', 'Fiji'),
('FI', 'Finland'),
('FR', 'France'),
('GF', 'French Guiana'),
('PF', 'French Polynesia'),
('TF', 'French Southern Territories'),
('GA', 'Gabon'),
('GM', 'Gambia'),
('GE', 'Georgia'),
('DE', 'Germany'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GR', 'Greece'),
('GL', 'Greenland'),
('GD', 'Grenada'),
('GP', 'Guadeloupe'),
('GU', 'Guam'),
('GT', 'Guatemala'),
('GG', 'Guernsey'),
('GN', 'Guinea'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HT', 'Haiti'),
('HM', 'Heard Island and McDonald Islands'),
('VA', 'Holy See (Vatican City State)'),
('HN', 'Honduras'),
('HK', 'Hong Kong'),
('HU', 'Hungary'),
('IS', 'Iceland'),
('IN', 'India'),
('ID', 'Indonesia'),
('IR', 'Iran, Islamic Republic of'),
('IQ', 'Iraq'),
('IE', 'Ireland'),
('IM', 'Isle of Man'),
('IL', 'Israel'),
('IT', 'Italy'),
('JM', 'Jamaica'),
('JP', 'Japan'),
('JE', 'Jersey'),
('JO', 'Jordan'),
('KZ', 'Kazakhstan'),
('KE', 'Kenya'),
('KI', 'Kiribati'),
('KP', 'Korea, Democratic People\'s Republic of'),
('KR', 'Korea, Republic of'),
('KW', 'Kuwait'),
('KG', 'Kyrgyzstan'),
('LA', 'Lao People\'s Democratic Republic'),
('LV', 'Latvia'),
('LB', 'Lebanon'),
('LS', 'Lesotho'),
('LR', 'Liberia'),
('LY', 'Libyan Arab Jamahiriya'),
('LI', 'Liechtenstein'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('MO', 'Macao'),
('MK', 'Macedonia, The Former Yugoslav Republic of'),
('MG', 'Madagascar'),
('MW', 'Malawi'),
('MY', 'Malaysia'),
('MV', 'Maldives'),
('ML', 'Mali'),
('MT', 'Malta'),
('MH', 'Marshall Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MU', 'Mauritius'),
('YT', 'Mayotte'),
('MX', 'Mexico'),
('FM', 'Micronesia, Federated States of'),
('MD', 'Moldova, Republic of'),
('MC', 'Monaco'),
('MN', 'Mongolia'),
('ME', 'Montenegro'),
('MS', 'Montserrat'),
('MA', 'Morocco'),
('MZ', 'Mozambique'),
('MM', 'Myanmar'),
('NA', 'Namibia'),
('NR', 'Nauru'),
('NP', 'Nepal'),
('NL', 'Netherlands'),
('AN', 'Netherlands Antilles'),
('NC', 'New Caledonia'),
('NZ', 'New Zealand'),
('NI', 'Nicaragua'),
('NE', 'Niger'),
('NG', 'Nigeria'),
('NU', 'Niue'),
('NF', 'Norfolk Island'),
('MP', 'Northern Mariana Islands'),
('NO', 'Norway'),
('OM', 'Oman'),
('PK', 'Pakistan'),
('PW', 'Palau'),
('PS', 'Palestinian Territory, Occupied'),
('PA', 'Panama'),
('PG', 'Papua New Guinea'),
('PY', 'Paraguay'),
('PE', 'Peru'),
('PH', 'Philippines'),
('PN', 'Pitcairn'),
('PL', 'Poland'),
('PT', 'Portugal'),
('PR', 'Puerto Rico'),
('QA', 'Qatar'),
('RE', 'Reunion'),
('RO', 'Romania'),
('RU', 'Russian Federation'),
('RW', 'Rwanda'),
('BL', 'Saint Barth�lemy'),
('SH', 'Saint Helena'),
('KN', 'Saint Kitts and Nevis'),
('LC', 'Saint Lucia'),
('MF', 'Saint Martin'),
('PM', 'Saint Pierre and Miquelon'),
('VC', 'Saint Vincent and the Grenadines'),
('WS', 'Samoa'),
('SM', 'San Marino'),
('ST', 'Sao Tome and Principe'),
('SA', 'Saudi Arabia'),
('SN', 'Senegal'),
('RS', 'Serbia'),
('SC', 'Seychelles'),
('SL', 'Sierra Leone'),
('SG', 'Singapore'),
('SK', 'Slovakia'),
('SI', 'Slovenia'),
('SB', 'Solomon Islands'),
('SO', 'Somalia'),
('ZA', 'South Africa'),
('GS', 'South Georgia and the South Sandwich Islands'),
('ES', 'Spain'),
('LK', 'Sri Lanka'),
('SD', 'Sudan'),
('SR', 'Suriname'),
('SJ', 'Svalbard and Jan Mayen'),
('SZ', 'Swaziland'),
('SE', 'Sweden'),
('CH', 'Switzerland'),
('SY', 'Syrian Arab Republic'),
('TW', 'Taiwan, Province Of China'),
('TJ', 'Tajikistan'),
('TZ', 'Tanzania, United Republic of'),
('TH', 'Thailand'),
('TL', 'Timor-Leste'),
('TG', 'Togo'),
('TK', 'Tokelau'),
('TO', 'Tonga'),
('TT', 'Trinidad and Tobago'),
('TN', 'Tunisia'),
('TR', 'Turkey'),
('TM', 'Turkmenistan'),
('TC', 'Turks and Caicos Islands'),
('TV', 'Tuvalu'),
('UG', 'Uganda'),
('UA', 'Ukraine'),
('AE', 'United Arab Emirates'),
('GB', 'United Kingdom'),
('US', 'United States'),
('UM', 'United States Minor Outlying Islands'),
('UY', 'Uruguay'),
('UZ', 'Uzbekistan'),
('VU', 'Vanuatu'),
('VE', 'Venezuela'),
('VN', 'Viet Nam'),
('VG', 'Virgin Islands, British'),
('VI', 'Virgin Islands, U.S.'),
('WF', 'Wallis And Futuna'),
('EH', 'Western Sahara'),
('YE', 'Yemen'),
('ZM', 'Zambia'),
('ZW', 'Zimbabwe');

INSERT INTO products (name, price, description, created, modified) VALUES
('The Witcher 2: Assassins of Kings Premier Edition (PC DVD-ROM)', 485.95,
'The second entry in the Witcher saga is characterized by an incredibly gripping, mature and non-linear plot. In addition, the new combat system is even smoother and guarantees a greater variety of tactical possibilities. The game is built upon completely new technology, designed from scratch by CD Projekt RED to develop role-playing games with non-linear plot. The new technology also delivers beautiful visuals, transporting players to one of the most vivid RPG universes ever.',
'2010-09-24 13:43:52', '2010-09-25 10:21:11'),
('Gran Turismo 5: Signature Edition (PS3)', 699.99, 'This version of the game is known as the Signature Edition. It contains a whole host of exclusive additional content, which is listed below. (Note these details may change withour prior notice)',
'2011-01-29 14:58:01', '2011-01-29 14:58:01'),
('Sony PlayStation 3 Slim Console 320GB plus Killzone 3 (PS3)', 3499.95, 'PS3 320Gb Game system + Killzone 3 (PS3)<br/>DualShock 3 Controller<br/>AC power cord<br/>Audio/Video cable (HDMI or Component cable sold separately)<br/>USB cable)',
'2010-09-15 11:04:04', '2011-02-21 12:13:02'),
('Portal 2 (PS3)', 499.99, 'Coming this April to four major platforms (PC, Xbox 360, PS3, and Mac) Portal 2 draws from the award-winning formula of innovative gameplay, story, and music that earned the original Portal over 70 industry accolades and created a cult following.',
'2011-03-24 15:23:05', '2011-03-24 15:23:05'),
('Portal 2 (Xbox 360)', 499.99, 'Coming this April to four major platforms (PC, Xbox 360, PS3, and Mac) Portal 2 draws from the award-winning formula of innovative gameplay, story, and music that earned the original Portal over 70 industry accolades and created a cult following.',
'2011-03-24 16:02:14', '2011-03-24 16:02:14'),
('Bulletstorm (Xbox 360)', 425.65, 'Set in a futuristic utopia, an elite peacekeeping force thwarts the rumblings of civil war. But deception within the ranks has caused two members of the most feared unit to strike out on their own. Now stranded on an abandoned paradise, Grayson Hunt and Ishi Sato find themselves surrounded by hordes of mutants and flesh eating gangs.',
'2011-02-22 13:25:52', '2011-02-22 13:25:52'),
('Dirt 3 (Xbox 360)', 530.00, 'DiRT 3 will boast more cars, more locations, more routes and more events than any other game in the series, including over 50 rally cars representing the very best from five decades of the sport. With more than double the track content of 2009\'s hit, DiRT 3 will see players start at the top as a professional driver, with a top-flight career in competitive off-road racing complimented by the opportunity to express themselves in Gymkhana-style showpiece driving events.',
'2011-03-01 09:52:42', '2011-03-01 09:52:42'),
('Xbox 360 S Console (250GB Hard drive)', 2999.99, 'The XBOX 360 games console from Microsoft pushes the limits of gaming even further! Impressive performances are guaranteed thanks to its extremely high resolutions of up to 720p/1080i. Featuring a 250 GB built-in hard drive and wireless 802.11n support for streaming content from Xbox Live, the XBOX 360 has a smart, black design and is so easy to use thanks to its extensive connectivity. Among its wide range of connectors, you\'ll find three USB 2.0 ports, meaning you can hook up the Xbox 360',
'2010-11-18 09:42:14', '2010-11-18 09:42:14'),
('Kinect Sensor with Kinect Adventures (Xbox 360)', 1999.99, 'Kinect is the world\�s first system to combine an RGB camera, depth sensor, multiarray microphone and custom processor running proprietary software that brings Kinect experiences to every Xbox 360 console. The Kinect sensor tracks full-body movement and individual voices, creating controller-free fun and social entertainment available only on Xbox 360.',
'2011-02-28 18:48:52', '2011-02-28 18:48:52'),
('Need For Speed: SHIFT 2 - Unleashed Limited Edition (PS3)', 435.95, 'Feel what the Driver\'s Battle is actually like in an unparalleled racing experience that captures the physicality and brutality of being behind the wheel going 200mph. Frighteningly authentic physics and degradation of tracks and cars, thrilling night racing, and an eye-watering sense of speed combined with the helmet camera puts you right in the heart in the action. Feel every scrape, bump, and burn out in an all-out fight to the finish line.',
'2011-04-01 08:27:02', '2011-04-01 08:27:02'),
('Duke Nukem Forever (Xbox 360)', 465.95, 'Duke Nukem Forever brings back the king of action in a highly anticipated game set to pummel players with unprecedented interactivity, variety, realism, and Duke\'s special whoop-ass brand of humor. The first in-house Duke Nukem game by 3D Realms since Duke Nukem 3D.',
'2011-01-08 12:33:39', '2011-01-08 12:33:39');