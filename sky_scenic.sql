-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 05:18:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sky_scenic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2023_10_15_224857_change_column_name_in_table', 2),
(43, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(44, '2019_08_19_000000_create_failed_jobs_table', 3),
(45, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(46, '2023_10_13_200104_create_users_table', 3),
(47, '2023_10_14_220826_create_photos_table', 3),
(48, '2023_10_17_152230_create_news_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id`, `title`, `subtitle`, `date`, `author`, `img_path`, `body`, `created_at`, `updated_at`) VALUES
(1, 'UGT y CCOO anuncian movilizaciones por precarización del handling en aeropuertos españoles', 'AENA ha convocado a las empresas de handling que han obtenido licencias para operar en los aeropuertos españoles tras el concurso público y ha enfatizado la obligación de cumplir el convenio del sector en el proceso de subrogación de los trabajadores y durante la vigencia de las licencias.', '2023-10-18', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2023/10/Handling-696x385.jpg', 'Los sindicatos denuncian la falta de interés de AENA por los procesos de revisión solicitados por ellos\r\nLos trabajadores del handling se enfrentan a una precarización de sus condiciones laborales debido a la publicación de concursos en los que prima el descuento económico sobre las tarifas establecidas, y que exigen inversiones en equipos y maquinarias, dejando las condiciones laborales en último lugar. CCOO y UGT han propuesto un periodo de movilizaciones que se prolongará hasta la primavera de 2024.\r\n\r\nAENA ha convocado a las empresas concesionarias del servicio de Handling\r\nPor otro lado, AENA ha convocado a las empresas de handling que han obtenido licencias para operar en los aeropuertos españoles tras el concurso público.\r\n\r\nEl gestor aeroportuario ha enfatizado la obligación de cumplir el convenio del sector en el proceso de subrogación de los trabajadores durante la vigencia de las licencias. Aena ha recordado que el incumplimiento puede ser motivo de retirada de la licencia de handling.\r\n\r\nLas empresas han manifestado su total compromiso con el cumplimiento del convenio sectorial y con las obligaciones adquiridas en sus ofertas. Aena ha repasado con las empresas el calendario de puesta en marcha de las nuevas licencias, acordado durante los procesos de consultas previos al concurso público.', '2023-10-17 14:34:54', '2023-10-17 14:34:54'),
(3, 'Airbus y el desafío de las Operaciones con un Solo Piloto: ¿Innovación o Riesgo Innecesario?', 'Airbus ha presentado sus nuevos modelos A321F y A350F a FedEx con la idea de operar con menos pilotos a bordo', '2023-10-16', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2023/10/A350F-696x385.jpg', 'Las preocupaciones sobre la SPO/RCO se centran principalmente en la seguridad. Los críticos argumentan que muchos accidentes aéreos potencialmente catastróficos se han evitado gracias a la presencia de dos pilotos en la cabina. Además, temen que el SPO/RCO pueda incrementar el riesgo de accidentes, particularmente en situaciones de emergencia donde la intervención de dos pilotos puede ser crucial.\r\n\r\nA este respecto, recientemente Airbus y Air France han sido considerados responsables del accidente AF447, pero no culpables según los tribunales franceses al no poderse demostrar una relación causal. El hecho es que el informe de la comisión de investigación de accidentes francesa, la BEA, confirmó que la tripulación se enfrentó a la pérdida de tres fuentes de información sobre la velocidad aerodinámica por congelación de las sondas, información necesaria para que todos estos automatismos trabajen correctamente.', '2023-10-17 14:36:16', '2023-10-17 14:36:16'),
(4, 'Unidades de caza del Ejército del Aire y del Espacio participarán en el ejercicio Ocean Sky 23', 'La defensa aérea del archipiélago canario, al igual que la del resto del territorio español, es responsabilidad de la OTAN con los medios nacionales puestos a su disposición', '2023-10-17', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2023/10/Ocean-Sky-696x385.jpg', 'Aviación Digital, Sp.- La Fuerza Aérea Española ha anunciado el inicio del ejercicio Ocean Sky 23, un ejercicio internacional especializado en el adiestramiento avanzado en misiones aire-aire que se realizará en el espacio aéreo de las Islas Canarias. El ejercicio se llevará a cabo del 16 al 26 de octubre de 2023, y contará con la participación de unidades de caza del Ejército del Aire y del Espacio, así como de unidades extranjeras invitadas.\r\n\r\nEl objetivo principal del ejercicio es entrenar las capacidades de la estructura de Mando y Control del Mando Aéreo de Combate en una campaña de superioridad aérea. Durante el ejercicio, se centrarán en la utilización de múltiples medios simultáneamente en escenarios demandantes, adecuados a la realidad geoestratégica.\r\n\r\nLa defensa aérea del archipiélago canario, al igual que la del resto del territorio español, es responsabilidad de la OTAN con los medios nacionales puestos a su disposición. El ejercicio Ocean Sky 23 permitirá incrementar el nivel de preparación para el combate aire-aire de las unidades de caza, y contribuirá a mejorar la seguridad y defensa del espacio aéreo español.\r\n\r\nEste ejercicio es una oportunidad para que las unidades militares españolas y extranjeras puedan entrenar juntas y mejorar su interoperabilidad, lo que es esencial en situaciones de conflicto real. Se espera que Ocean Sky 23 sea un éxito, y que contribuya a fortalecer la capacidad militar de España y sus aliados internacionales.', '2023-10-17 14:36:41', '2023-10-17 14:36:41'),
(5, 'Reunión de la IGC en las instalaciones del Real Aero Club de España', 'El Bureau de la IGC, llevó a cabo una reunión semestral donde se tomaron importantes decisiones relacionadas con la reglamentación del vuelo a vela', '2023-10-15', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2023/10/Vuelo-a-Vela2-696x385.jpg', 'Aviación Digital, Sp.- El pasado fin de semana, el Bureau de la Comisión Internacional de Vuelo a Vela (IGC) de la Federación Aeronáutica Internacional (FAI) se reunió en las instalaciones del Real Aero Club de España en Madrid.\r\n\r\nEl Bureau de la IGC, como órgano ejecutivo de la Comisión Internacional de Vuelo a Vela, llevó a cabo una reunión semestral donde se tomaron importantes decisiones relacionadas con la reglamentación del vuelo a vela.\r\n\r\nEntre los acuerdos alcanzados se encuentran la aprobación de los campeonatos del mundo, la asignación de presidentes de los jurados internacionales, la designación de comisarios para las competiciones internacionales, la aprobación de sistemas de seguimiento para las competiciones de CAT I y diversos proyectos de mejora de las competiciones internacionales.\r\n\r\nDurante la reunión, el Bureau expresó su agradecimiento al Real Aero Club de España por su hospitalidad en las instalaciones del Aeropuerto de Madrid-Cuatro Vientos. Además, destacaron que esta no será la última vez que el Bureau de la IGC se reúna en Madrid, debido al excelente trato recibido por parte del RACE.', '2023-10-17 14:37:11', '2023-10-17 14:37:11'),
(6, 'ACERO: el nuevo proyecto de NASA para la lucha contra los incendios', 'Este proyecto está destinado ayudar a ampliar el uso de sistemas aéreos no tripulados en la respuesta a catástrofes', '2023-10-11', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2023/04/dron-acero-nasa-696x277.jpg', 'Florencia Amat / Aviación Digital, Sp. – ¿Quién dijo que NASA solo se interesa por el espacio? Aunque evidentemente sea una organización orientada a las misiones extraplanetarias y al conocimiento del espacio exterior, también realiza proyectos para hacer más eficientes y seguros los trabajos aéreos en la Tierra. En este sentido, el innovador proyecto ACERO pretende mejorar la coordinación y las operaciones contra incendios forestales, a través de los drones y la tecnología.\r\n\r\nQué es ACERO\r\nACERO son las siglas del proyecto Advanced Capabilities for Emergency Response Operations de la NASA, el cual está dirigido por el Centro de Investigación Ames de la agencia en Silicon Valley. La visión nace de la necesidad de implementar herramientas que ayuden a los bomberos a extinguir los incendios en los momentos más cruciales y peligrosos para ellos, evitando su puesta en riesgo.\r\n\r\nLas operaciones aéreas de extinción de incendios deben realizarse, para asegurar su completa seguridad, con una visibilidad despejada. Sin embargo, son muchos los momentos en los que el humo bloquea en gran parte el campo de visión, haciendo que los pilotos no vislumbren al resto de aeronaves que tengan cerca o a otros obstáculos. ACERO conseguiría cubrir esos periodos de tiempo en el que los aviones no pueden volar, tanto por la gran cantidad de humo como por la baja visibilidad que hay por la noche.\r\n\r\nLos drones podrían manejarse sin problema desde la tierra, ampliando la ventana de tiempo disponible para la supresión aérea del incendio. La eficacia de las operaciones se vería también realzada, minimizando además los riesgos para los pilotos.\r\n\r\nNASA es consciente del poco uso que se les da a los drones en el sector de los trabajos aéreos, principalmente por la falta de herramientas y de conocimiento de la situación para que los equipos de respuesta puedan ver dónde están operando. Por eso, ACERO quiere desarrollar tecnologías de gestión del espacio aéreo para compartir información entre aeronaves tripuladas, operadores de drones y personal de tierra durante las intervenciones en incendios forestales.\r\n\r\nEstas tecnologías proporcionarán a todos los intervinientes un conocimiento común de la situación y garantizarán que no haya conflictos con las operaciones de las aeronaves. El software de seguridad de aeronaves desarrollado por ACERO también reducirá la probabilidad de encontrarse con peligros aéreos. Disponer de este conocimiento de la situación permitirá a los intervinientes integrar de forma segura los drones en las operaciones contra incendios forestales y suprimir y controlar de forma continua un incendio a lo largo de toda su vida, lo que actualmente no es posible.\r\n\r\nPosibles usos\r\nEl sistema ACERO hará que la comunicación aérea en los trabajos de extinción de incendios sea mucho más fluida, por lo que la gestión del espacio aéreo en casos de emergencia mejorará exponencialmente en los momentos en los que más se necesita. Los equipos de respuesta dispondrán de información más precisa y oportuna para tomar una decisión lo antes posible. Los drones podrían liderar nuevas misiones en la extinción de incendios o la entrega de equipos a los equipos de tierra, así como proporcionar enlaces de comunicación en zonas con conectividad limitada.\r\n\r\nNASA contempla también la posibilidad de usar los drones en quemas prescritas, aquellos incendios provocados que tienen un fin preventivo: quemar la maleza muerta que actúa como combustible y puede provocar incendios forestales a gran escala. En la actualidad, este tipo de quemas se realizan con una combinación de helicópteros pilotados, personal de tierra y un número muy limitado de drones. La utilización de drones a distancia para estas operaciones sería más segura y barata que el despliegue de equipos terrestres y helicópteros. También permitiría a los equipos realizar quemas controladas en mayores extensiones de terreno cada año.\r\n\r\nOtros beneficios\r\nLos incendios, aparte de ser un destrozo brutal del ecosistema y del paisaje natural, dejan mucha huella en el medioambiente. Como cuenta NASA, cada año miles de incendios forestales liberan a la atmósfera grandes cantidades de dióxido de carbono que calientan el planeta. Además, solo en Estados Unidos, el coste de la extinción de los mismos asciende a 2.900 millones de dólares en un plazo de cinco años.\r\n\r\nContener y responder a estos incendios también requiere la colaboración entre los bomberos y los equipos de tierra, y la coordinación de decenas de aviones operados por múltiples agencias gubernamentales. Por eso, este proyecto aboga por la sostenibilidad mientras que mantiene la eficiencia en los costes operativos.\r\n\r\nInicio del proyecto\r\nSegún revela la NASA, esta se asociará en los próximos años con la industria y las agencias de respuesta a incendios forestales para realizar demostraciones de campo conjuntas de tecnologías de aviación recientemente desarrolladas y dirigidas por ACERO.\r\n\r\nEl proyecto también apoya la investigación de la NASA sobre Movilidad Aérea Avanzada, que guiará el desarrollo por parte de la industria de taxis aéreos eléctricos y drones y ayudará a la Administración Federal de Aviación a integrar de forma segura estos vehículos en el espacio aéreo nacional.', '2023-10-17 14:38:40', '2023-10-17 14:38:40'),
(7, 'SLTA gana las elecciones en AVINCIS ACS y se compromete a luchar por los derechos laborales de los trabajadores', 'SLTA consigue 11 delegados de los 17 que conforman el nuevo comité.', '2023-10-11', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2023/10/SLTA-Piloto-696x385.jpg', 'Aviación Digital, Sl.- En una declaración dirigida a los miembros afiliados y empleados de AVINCIS ACS, el Sindicato Libre de Trabajadores Aéreos (SLTA) celebró su victoria en las elecciones del comité de empresa, que tuvieron lugar el pasado 29 de septiembre. Con una mayoría absoluta, SLTA consiguió 11 delegados de los 17 que conforman el nuevo comité.\r\n\r\nEl comunicado resaltó los desafíos a los que el sindicato ha enfrentado durante estos últimos años, como la crisis del COVID-19, la falta de disposición por parte de la empresa para llegar a acuerdos y la pérdida de compañeros en el camino, incluyendo lamentablemente la muerte de Florentino Sánchez Sánchez.\r\n\r\nA pesar de estos obstáculos, los dirigentes de SLTA se han comprometido «a defender y trabajar incansablemente por los derechos y condiciones laborales de los trabajadores«. Reconocieron que no pueden garantizar que se logre todo lo deseado inmediatamente; sin embargo, aseguraron que pondrán todo su esfuerzo en llevar adelante las iniciativas planificadas.\r\n\r\nEl sindicato expresó su gratitud hacia aquellos que han brindado su apoyo a lo largo del tiempo, así como también hacia aquellos quienes han enfrentado consecuencias por ayudar. También enviaron un afectuoso abrazo a la familia del fallecido Florentino Sánchez Sánchez con el fin de reafirmarles su apoyo incondicional.\r\n\r\nEl sindicato SLTA reafirmó su compromiso de colaborar y trabajar junto a todas las personas que compartan la meta de garantizar condiciones laborales justas para todos.', '2023-10-17 14:39:35', '2023-10-17 14:39:35'),
(8, 'UGT exige a AENA permitir la revisión de ofertas en el concurso de handling', 'Iberia dejará de prestar este servicio a terceros en varios aeropuertos y afectará aproximadamente a 20.000 trabajadores', '2023-10-12', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2019/07/Handling-sde-Iberia-en-Madrid-696x385.jpg', 'El secretario general de la Unión General de Trabajadores (UGT), José María Álvarez, ha exigido a Aeropuertos Españoles y Navegación Aérea (AENA) que permita al sindicato revisar las ofertas presentadas en el concurso de handling, según un comunicado emitido ayer por UGT a la agencia estatal de noticias EFE.\r\n\r\nÁlvarez, acompañado por el secretario general de FeSMC-UGT, Antonio Oviedo, y el secretario del sector aéreo de FeSMC-UGT, Chema Pérez, se reunió con la cúpula directiva de AENA esta tarde. En la reunión, expresaron su preocupación por la situación en la que pueden quedar los trabajadores del sector aéreo tras el reparto de las licencias.\r\n\r\nUGT ha subrayado que «estará vigilante para que los adjudicatarios no traten en ningún caso de obtener réditos adicionales a costa de los derechos y garantías de los trabajadores del sector«. Además, el sindicato ha advertido que «defenderá de la manera más contundente posible cualquier intención de atacar las garantías expuestas en el artículo 78 del Capítulo XI del V Convenio Colectivo del Sector de Handling«.\r\n\r\nEl pasado 26 de septiembre, AENA publicó los resultados del concurso de licitación de las licencias de asistencia en tierra a terceros en la categoría de rampa para los próximos siete años. Este concurso, considerado la mayor licitación del mundo en servicios de asistencia en tierra a terceros, implica la renovación de 41 licencias para 43 aeropuertos y dos helipuertos de la red de AENA, con un personal potencialmente afectado de aproximadamente 20.000 trabajadores.\r\n\r\nComo resultado del concurso, Iberia dejará de prestar este servicio a terceros en varios aeropuertos, mientras mantiene los servicios en otros, incluyendo Madrid, el aeropuerto más grande del Reino de España.', '2023-10-17 14:40:25', '2023-10-17 14:40:25'),
(9, 'El Desfile Aéreo Destacará la Versatilidad y Capacidad de las Fuerzas Armadas', 'El desfile aéreo promete ser un espectáculo impresionante que destaca la versatilidad y capacidad de las Fuerzas Armadas', '2023-10-12', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2023/10/Formacion-Militar-696x385.jpg', 'Aviación Digital, Sp.- El desfile aéreo de las Fuerzas Armadas de España en el Día de su Fiesta Nacional, promete ser un gran despliegue con 86 aeronaves, incluyendo 57 aviones y 29 helicópteros.\r\n\r\nEntre las aeronaves que desfilarán, se encuentra el A400M del Ala 31, una aeronave conocida por su capacidad de carga de material y pasajeros, así como por sus capacidades de última generación. El Ala 31 ha demostrado su compromiso con su lema: «Lo que sea, donde sea y cuando sea«, reflejando su versatilidad. El A400M desfilará equipado con pods en los planos para realizar misiones de reabastecimiento en vuelo, una misión que garantiza la proyección de la fuerza y aumenta el radio de acción de las aeronaves preparadas para reabastecer en vuelo.\r\n\r\nOtra aeronave que se presentará es el Airbus 330 del 45 Grupo, que recientemente ha adquirido el EA para la realización de misiones de aerotransporte de personal y carga. Este avión tiene una autonomía de aproximadamente 15 horas de vuelo y una capacidad de hasta 295 pasajeros.', '2023-10-17 14:40:54', '2023-10-17 14:40:54'),
(10, 'Abierta la licitación para la renovación energética del hangar del Ala 15', 'El presupuesto base de la licitación es de 4.193.989,07€ con impuestos', '2023-10-12', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2023/10/a400m-en-su-hangar-ala-15-zaragoza-696x385.jpg', 'Florencia Amat / Aviación Digital, Sp. – El edificio 198 Hangar de Mantenimiento del Ala 15 de la Base Aérea de Zaragoza debe someterse a una rehabilitación energética, tal y como se lee en el pliego de contratación del anuncio publicado en el portal estatal. El importe del contrato, con impuestos, será de casi 4,2 millones de euros.\r\n\r\nEste proceso, marcado como urgente en su tramitación, se publicó el pasado 4 de octubre, y los postulantes tienen hasta el 23 del mismo mes para presentar ofertas. El plazo de la ejecución de la obra tras la licitación será de 150 días como máximo.\r\n\r\nSegún el propio pliego del contrato, «se actúa sobre este edificio debido a su nivel de actividad y a su ocupación, factores que en conjunto con la antigüedad de su edificio y de sus instalaciones han sido los que determinan el contenido del mismos».\r\n\r\nLas acciones a llevar a cabo serían las siguientes, también especificadas:\r\n\r\nOptimización de la envolvente de la construcción\r\n - Mejora del sistema de climatización\r\n- Instalación de un sistema de iluminación exterior e interior eficiente\r\n- Instalación de un sistema de gestión y monitorización de las instalaciones', '2023-10-17 14:42:07', '2023-10-17 14:42:07'),
(11, 'IFALPA reclama medidas para prevenir la exposición a humos de cabina en aviones comerciales', 'La exposición a estos humos puede poner en peligro la seguridad del vuelo y tener efectos sobre la salud a largo plazo', '2023-10-15', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2023/10/Cabina-de-pasajeros-696x385.jpg', 'Aviación Digital, Sp.- La Federación Internacional de Asociaciones de Pilotos de Líneas Aéreas (IFALPA) ha emitido un documento de posición en el que reclama una serie de medidas para prevenir la exposición a los humos de cabina en aviones comerciales.\r\n\r\nEn el documento, IFALPA señala que en la mayoría de los aviones comerciales a reacción modernos, el aire de la cabina se toma directamente de los compresores de los compartimentos del motor sin filtrar, lo que puede dar lugar a la entrada de humos de aceite procedentes de la sección caliente del motor y/o APU.\r\n\r\nLa exposición a estos humos puede poner en peligro la seguridad del vuelo y tener efectos sobre la salud a largo plazo, según indica IFALPA. Por ello, la federación reclama una mejor aplicación de la normativa en relación con la contaminación del aire de sangrado, así como la instalación de nuevos filtros de aire de purga mejorados cuando estén disponibles y el desarrollo e instalación de sistemas de detección en tiempo real.\r\n\r\nAsimismo, IFALPA pide que se acelere y priorice la certificación de aceites sin TCP por parte de los fabricantes de motores y que se implanten estos aceites en toda la industria. Además, reclama que los miembros de la tripulación reciban formación básica y recurrente para reconocer y responder a los eventos de humos y que se aplique un protocolo médico exhaustivo, normalizado y adecuado para los tripulantes afectados tras un incidente de humos.\r\n\r\nIFALPA también destaca la necesidad de llevar a cabo más investigación médica y científica sobre los efectos a largo plazo de los eventos de humos sobre la salud. En definitiva, IFALPA reclama una serie de medidas para prevenir la exposición a humos de cabina en aviones comerciales y garantizar la seguridad y salud de los miembros de la tripulación y los pasajeros.', '2023-10-17 14:44:39', '2023-10-17 14:44:39'),
(12, '22 años del 11S: un antes y un después en la seguridad a bordo', 'Los atentados del 11S marcaron las nuevas reglas de la seguridad a bordo, además de la forma de hacer política internacional tras proclamarse, por primera vez, la \"guerra contra el terror\"', '2023-09-11', 'Rizzle27', 'https://aviaciondigital.com/wp-content/uploads/2023/09/american-airlines-11s-696x385.jpg', 'Alba Sanz/Aviación Digital Sp.- Hoy se cumplen 22 años del peor ataque terrorista de la historia. El 11 de septiembre del año 2001, Estados Unidos era testigo de una serie de atentados terroristas que acabaron con la vida de 3.017 personas y ocasionaba más de 6.000 heridos.\r\n\r\nEl que era líder de la organización terrorista Al-Qaeda, Osama Bin Laden, diseñó un plan que pretendía atacar a Occidente de la forma más cruel: cuatro aviones secuestrados por un total de 19 terroristas – dos de American Airlines (un AA11 B762ER N334AA con 76 pasajeros y 11 miembros de la tripulación a bordo y un AA77 B752 N644AA con 53 pasajeros y otros 6 miembros de la tripulación) y otros dos de United Airlines (UA17 B762 N612UA con 51 pasajeros y 9 miembros de la tripulación y un UA93 B752 N591UA con 33 pasajeros y 7 miembros de la tripulación) – serían los protagonistas de un ataque que pretendía dar un golpe abismal al centro neurálgico de las operaciones militares estadounidenses: el Pentágono, además de a la propia Casa Blanca, es decir, un ataque directo al Gobierno de Estados Unidos, la democracia del país, sus valores y su propio establishment.\r\n\r\nLos dos aviones que se dirigían tanto al Pentágono como a La Casa Blanca fueron derribados. Sin embargo, horas antes, otros dos aviones consiguieron llegar a otro de los objetivos del grupo yihadista: el complejo de edificios del World Trade Center de Nueva York donde se ubicaban las Torres Gemelas.\r\n\r\nConcretamente, a las 8:46 de la mañana (hora local) el primer avión consiguió impactar contra la primera de las torres, siendo esta uno de los edificios más emblemáticos de la ciudad neoyorquina. En medio del estupor de la ciudadanía, cuando la torre comenzaba a arder y ya comenzaban a reportarse las primeras muertes, minutos después de este ataque, un segundo avión se estrellaba contra la segunda torre elevando las muertes a más de 3.000.\r\n\r\nUn antes y un después de la seguridad\r\nEl 11S supuso un antes y un después en múltiples aspectos. En primer lugar, Estados Unidos declaraba la guerra contra el terror y no contra un estado-nación, iniciando así una serie de operaciones antiterroristas que tenían como fin «dar caza» a Bin Laden. «Nuestra guerra contra el terror comienza con Al Qaeda, pero no finaliza allí. No terminará hasta que cada grupo terrorista de alcance global haya sido encontrado, detenido y derrotado», defendía el presidente George W. Bush en un discurso ante el Congreso estadounidense días después del ataque. Dese ese momento, fuerzas angloestadounidenses comenzaron los bombardeos de objetivos de Al Qaeda y del régimen Talibán que les acogía en Afganistán y Pakistán.\r\n\r\n11 años después de librar la guerra contra el terrorismo, guerra que por otra parte supuso ser una de las más caras y costosas del país, el Gobierno estadounidense, presidido entonces por el demócrata Barack Obama, afirmaba que podía «anunciar al pueblo estadounidense y al mundo que EEUU ha dirigido una operación que ha causado la muerte de Osama bin Laden». Estados Unidos había ganado pero no por ello la guerra llegaba a su fin.\r\n\r\nAdemás de esta nueva forma de guerra, el 11S trajo consigo otra serie de consecuencia como la radicalización tanto de los grupos yihadistas como la islamofobia, además del empeoramiento de los derechos humanos después de que las fuerzas estadounidenses emplearan duros métodos de interrogatorio que llegaron a ser consideradas como tortura por defensores de derechos humanos y organizaciones internacionales.\r\n\r\nAsimismo, una de las consecuencias más notorias fueron las nuevas medidas que se tomaron en torno a la seguridad en la aviación con el objetivo de hacer de la aviación uno de los medios más seguros para viajar, además de de evitar en un futuro ataques terroristas que pudieran ser similares.\r\n\r\nBloqueo de puertas, introducción de sistemas de escaneo y aduanas\r\nEn primer lugar, debido a que los cuatro aviones fueron secuestrados, se aprobaron medidas que tenían como fin fortalecer la seguridad de las puertas de las cabinas de los aviones a través del bloqueo de las puertas y asegurar que solo el personal autorizado tenga acceso a la cabina durante el vuelo.\r\n\r\nAdemás, se implementaron medidas más estrictas en los controles de pasajeros y equipaje de mano, incluyendo la introducción de sistemas de escaneo de rayos X más avanzados y detectores de metales más sensibles en los aeropuertos. Del mismo modo, se promulgaron normativas más estrictas para el transporte de líquidos, geles y aerosoles en el equipaje de mano y se prohibió subir a bordo ciertos objetos y materiales en vuelos comerciales.\r\n\r\nJunto a esto, se mejoraron las medidas de seguridad en el manejo de la carga y el correo que se transporta en las aeronaves, con un enfoque particular en identificar y prevenir posibles amenazas. Asimismo, se establecieron listas de pasajeros y programas de detección de posibles terroristas en un proceso en el que los pasajeros pueden ser seleccionados aleatoriamente o según perfiles de riesgo para un escrutinio adicional.\r\n\r\nEn esta misma línea, en algunos aeropuertos internacionales, se implementaron programas de precontrol de aduanas, donde los pasajeros de vuelos a Estados Unidos son sometidos a controles de seguridad adicionales antes de abordar el avión.', '2023-10-17 14:46:38', '2023-10-17 14:46:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aircraft` varchar(255) NOT NULL,
  `license_plate` varchar(255) NOT NULL,
  `airline` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `photos`
--

INSERT INTO `photos` (`id`, `aircraft`, `license_plate`, `airline`, `location`, `country`, `img_path`, `author`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Eurofighter Typhoon FGR.4', 'ZK361', 'United Kingdom - Royal Air Force (RAF)', 'Lossiemouth Air Force Base - EGQS', 'United Kingdom', 'https://cdn.jetphotos.com/full/5/2053839_1697572448.jpg', 'Rizzle27', '2023-10-17', '2023-10-17 14:48:13', '2023-10-17 14:48:13'),
(2, 'Eurofighter Typhoon FGR.4', 'ZK361', 'United Kingdom - Royal Air Force (RAF)', 'Athens Eleftherios Venizelos Int\'l Airport - LGAV', 'Greece', 'https://cdn.jetphotos.com/full/6/59285_1606167417.jpg', 'Rizzle27', '2023-10-16', '2023-10-17 14:54:57', '2023-10-17 14:54:57'),
(3, 'Eurofighter Typhoon FGR.4', 'ZK319', 'United Kingdom - Royal Air Force (RAF)', 'Athens Eleftherios Venizelos Int\'l Airport - LGAV', 'Greece', 'https://cdn.jetphotos.com/full/5/1573894_1695642798.jpg', 'Rizzle27', '2023-10-03', '2023-10-17 14:55:53', '2023-10-17 14:55:53'),
(4, 'Airbus A380-842', 'A6-EVG', 'Emirates', 'Sydney Kingsford Smith Int\'l Airport - YSSY', 'Australia', 'https://cdn.jetphotos.com/full/6/714087_1697544944.jpg', 'Rizzle27', '2023-10-07', '2023-10-17 14:56:29', '2023-10-17 14:56:29'),
(5, 'Bell UH-1D Iroquois', 'D-HRRI', 'Private', 'Bad Gandersheim - EDVA', 'Germany', 'https://cdn.jetphotos.com/full/6/1137797_1697580227.jpg', 'Rizzle27', '2023-10-13', '2023-10-17 14:57:09', '2023-10-17 14:57:09'),
(6, 'Eurocopter EC 665 Tiger UHT', '74-65', 'Germany - Army', 'Other Location - Hellewarte training area', 'Germany', 'https://cdn.jetphotos.com/full/6/1076030_1697586568.jpg', 'Rizzle27', '2023-10-08', '2023-10-17 14:57:39', '2023-10-17 14:57:39'),
(7, 'Boeing 737-9 MAX', 'HP-9926CMP', 'Copa Airlines', 'Panama City Tocumen Int\'l - MPTO', 'Panama', 'https://cdn.jetphotos.com/full/6/845472_1697564923.jpg', 'Rizzle27', '2023-10-05', '2023-10-17 14:58:08', '2023-10-17 14:58:08'),
(8, 'Cessna 208B Grand Caravan', 'TI-BAY', 'Prestige Wings', 'San Jose Juan Santamaria Int\'l - MROC', 'Costa Rica', 'https://cdn.jetphotos.com/full/6/654936_1694834804.jpg', 'Rizzle27', '2023-10-12', '2023-10-17 14:58:55', '2023-10-17 14:58:55'),
(9, 'Airbus A320-232', 'LV-KGO', 'JetSmart Argentina', 'San Jose Juan Santamaria Int\'l - MROC', 'Costa Rica', 'https://cdn.jetphotos.com/full/6/1134558_1696193482.jpg', 'Rizzle27', '2023-10-02', '2023-10-17 14:59:27', '2023-10-17 14:59:27'),
(10, 'Vultee BT-13A Valiant', 'N4794N', 'Private', 'Houston Ellington Field - KEFD', 'USA', 'https://cdn.jetphotos.com/full/5/918214_1697512590.jpg', 'Rizzle27', '2023-10-19', '2023-10-17 14:59:53', '2023-10-17 14:59:53'),
(11, 'Airbus Helicopters H145', 'D-HADP', 'Airbus Helicopters', 'Augsburg-Mühlhausen - EDMA', 'Germany', 'https://cdn.jetphotos.com/full/6/72249_1659181281.jpg', 'Rizzle27', '2023-10-15', '2023-10-17 15:00:27', '2023-10-17 15:00:27'),
(12, 'Shenyang J-5', '64573', 'China - Air Force', 'Other Location - Shanghai-Oriental Green Boat Park', 'China', 'https://cdn.jetphotos.com/full/5/900899_1696255959.jpg', 'Rizzle27', '2023-10-10', '2023-10-17 15:01:14', '2023-10-17 15:01:14'),
(13, 'Falcon 9', 'Falcon 9', 'Spacex', 'Patrick Air Force Base - KXMR', 'USA', 'https://cdn.jetphotos.com/full/4/31873_1389244320.jpg', 'Rizzle27', '2023-10-10', '2023-10-17 15:02:19', '2023-10-17 15:02:19'),
(14, 'SpaceX Falcon 9 Block 5', 'B1067', 'SpaceX', 'Patrick Air Force Base - KXMR', 'USA', 'https://cdn.jetphotos.com/full/5/56507_1668296316.jpg', 'Rizzle27', '2023-08-30', '2023-10-17 15:02:57', '2023-10-17 15:02:57'),
(15, 'SLS Block 1', '01', 'United States - National Aeronautics and Space Administration (NASA)', 'Patrick Air Force Base - KXMR', 'USA', 'https://cdn.jetphotos.com/full/5/28305_1662264900.jpg', 'Rizzle27', '2023-05-17', '2023-10-17 15:03:32', '2023-10-17 15:03:32'),
(16, 'Boeing 717-231', 'VH-NXL', 'QantasLink (National Jet Systems)', 'Gold Coast/Coolangatta - YBCG', 'Australia', 'https://cdn.jetphotos.com/full/5/1198615_1696249028.jpg', 'Rizzle27', '2023-01-11', '2023-10-17 15:05:28', '2023-10-17 15:05:28'),
(17, 'Shenyang J-5', '64573', 'China - Air Force', 'Other Location - Shanghai - Oriental Green', 'China', 'https://cdn.jetphotos.com/full/5/84781_1636707320.jpg', 'Rizzle27', '2023-10-04', '2023-10-17 15:12:22', '2023-10-17 15:12:22'),
(18, 'Shenyang J-5', '64573', 'China - Air Force', 'Other Location - Shanghai - Oriental Green Boat Park', 'China', 'https://cdn.jetphotos.com/full/6/16144_1431301915.jpg', 'Rizzle27', '2023-10-25', '2023-10-17 15:12:56', '2023-10-17 15:12:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('regular','admin') NOT NULL DEFAULT 'regular',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rizzle27', 'lucas.garcia@davinci.edu.ar', '$2y$10$CunGVVeMVrTNsxNbBlnRYe2mYFixXkoY4Cr0NWw0DZU0xoivW01Wa', 'admin', NULL, '2023-10-17 14:34:52', '2023-10-17 14:34:52'),
(2, 'Kun', 'kun.aguero@davinci.edu.ar', '$2y$10$wkO3pVRmrUvlanbQlqezF.80RZeoq0MyPBYo9qZSwFT6vEOf0X5EG', 'regular', NULL, '2023-10-17 14:34:52', '2023-10-17 14:34:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
