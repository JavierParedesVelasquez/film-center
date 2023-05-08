-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 12:28:35
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `filmcenter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cod_usuario` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dni` char(8) NOT NULL,
  `telefono` char(9) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `passwor_cliente` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cod_usuario`, `nombres`, `apellidos`, `dni`, `telefono`, `direccion`, `passwor_cliente`) VALUES
(1, 'Javier', 'Paredes Velasquez', '77420999', '954712892', 'Jr. Martin Olaya cuadra7 456', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Camila', 'Paredes Velasquez', '74586326', '940108903', 'Av. Canto Bello', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Renzo', 'Paredes Velasquez', '12334567', '963582471', '15446', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estrenos`
--

CREATE TABLE `estrenos` (
  `id_pelicula` int(10) NOT NULL,
  `nombre_pelicula` varchar(100) NOT NULL,
  `time_estreno` varchar(50) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `tiempo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `url_video` varchar(200) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `disponible` varchar(50) NOT NULL,
  `calificacion` varchar(20) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estrenos`
--

INSERT INTO `estrenos` (`id_pelicula`, `nombre_pelicula`, `time_estreno`, `categoria`, `tiempo`, `descripcion`, `imagen`, `url_video`, `idioma`, `disponible`, `calificacion`, `activo`) VALUES
(1, 'ELVIS', 'Estreno: 14 Julio 2022', 'DRAMA', '2hrs 39min', 'La historia de Elvis (Butler), un drama completamente cinematográfico, se ve a través del prisma de su complicada relación con su enigmático representante, el coronel Tom Parker (Hanks). Contada desde la óptica de Parker, la película se adentra en la compleja dinámica entre ambos a lo largo de más de 20 años, desde el ascenso a la fama de Presley hasta su estrellato sin precedentes; con el telón de fondo de la evolución del panorama cultural y la pérdida de la inocencia en Estados Unidos. En el centro de ese viaje está una de las personas más significativas e influyentes en la vida de Elvis, Priscilla Presley (Olivia DeJonge).', 'estreno1.png', 'https://www.youtube.com/embed/r5KmbYkCxJo', 'INDEFINIDO', 'INDEFINIDO', 'TE', 1),
(2, 'EL TELEFONO NEGRO', 'Estreno: 21 Julio 2022', 'TERROR', '2hrs 0min', '“El teléfono está muerto. Y está sonando. El director Scott Derrickson regresa a sus raíces del terror y se asocia nuevamente con la marca más importante del género, Blumhouse, con una nueva entrega de thriller de terror. Finney Shaw, un tímido, pero inteligente niño de 13 años es secuestrado por un sádico asesino y atrapado en un aterrador, oscuro y aislado sótano, donde los gritos son de poca utilidad. Cuando un teléfono negro desconectado en la pared comienza a sonar, Finney descubre que puede escuchar a los espíritus de las víctimas anteriores del asesino. Los espirítus en el teléfono están decididos a asegurarse de que lo que les pasó a ellos no le pase a Finney. “\r\n\r\n', 'estreno2.png', 'https://www.youtube.com/embed/VQpTUoa4wok', 'INDEFINIDO', 'INDEFINIDO', '+14', 1),
(3, 'BUENA SUERTE LEO GRANDE', 'Estreno: 28 Julio 2022', 'COMEDIA', '1hrs 37min', 'Nancy Stokes (Emma Thompson) es una mujer viuda que nunca se permitió sentir placer, hasta ahora. En una habitación de hotel decide contratar a un atractivo joven trabajador sexual, llamado Leo Grande (Daryl McCormack), con el deseo de probar y disfrutar de una noche de placer y autodescubrimiento. Pero ninguno de los dos imaginó descubrir tanto sobre sí mismos. Una historia divertida y sensible sobre el deseo, la sexualidad y las conexiones humanas.\r\n\r\n', 'estreno3.png', 'https://www.youtube.com/embed/B2pG7-TUpg0', 'INDEFINIDO', 'INDEFINIDO', 'TBC', 1),
(4, 'DC LIGA DE SUPERMASCOTAS', 'Estreno: 28 Julio 2022', 'ANIMACIÓN', '1h 45min', 'En “DC Liga De Supermascotas”, Krypto el superperro y Superman son mejores amigos inseparables que comparten los mismos superpoderes y luchan juntos contra el crimen en Metropolis. Cuando Superman y el resto de la Liga de la Justicia son secuestrados, Krypto debe convencer a una banda de animales (Ace el sabueso, PB el minicerdo, Merton la tortuga y Chip la ardilla) a dominar sus propios poderes recién descubiertos y ayudarlo a rescatar a los superhéroes.', 'estreno4.png', 'https://www.youtube.com/embed/WlTMOzXBGBs', 'INDEFINIDO', 'INDEFINIDO', 'TE', 1),
(5, 'TREN BALA', '04 Agosto 2022', 'ACCIÓN', '2h', 'En Tren bala, Brad Pitt protagoniza la película en el papel de Ladybug, un asesino con poca suerte determinado a hacer su trabajo en paz después de que más de una de sus asignaciones se le han salido control. Sin embargo, el destino puede tener otros planes mientras que la última misión de Ladybug lo pone en un camino accidentado con adversarios mortales de diversas partes del planeta todos conectados pero con objetivos en conflicto en el tren más rápido del mundo…y tiene que descubrir como bajarse. Del director de Deadpool 2, David Leitch, el final del camino es sólo el comienzo de un viaje extremo sin parar a través de un Japón Moderno.', 'estreno5.png', 'https://www.youtube.com/embed/jUPwb7yz1Nk', 'INDEFINIDO', 'INDEFINIDO', '+14', 1),
(6, 'BESTIA', 'Estreno: 11 Agosto 2022', 'ACCIÓN', '2h', 'Idris Elba (Rápidos y Furiosos: Hobbs & Shaw, El Escuadrón Suicida) protagoniza un nuevo y emocionante thriller sobre un padre y sus dos hijas adolescentes que se ven perseguidos por un enorme león que intenta demostrar que la selva sólo tiene un máximo depredador. Elba interpreta al Dr. Nate Daniels, un marido que acaba de enviudar y que regresa a Sudáfrica a una zona de caza controlada por Martin Battles (Sharlto Copley, serie Muñeca Rusa, Maléfica), un viejo amigo de la familia y biólogo especializado en vida salvaje. Pero lo que comienza como un viaje de sanación se convierte en una aterradora lucha por sobrevivir cuando un león, que ha escapado de los cazadores clandestinos sediento de sangre y que ahora ve a todos los humanos como el enemigo, comienza a acecharlos. De Baltasar Kormákur, director de Everest y de las películas de Universal Pictures 2 Guns y Contrabando, Bestia es producida por Will Packer, el exitoso productor de Plan de chicas, la franquicia Un novato en apuros y diez películas que han abierto el número 1 en la taquilla de Estados Unidos, incluyendo Escuela Nocturna, Favor peligroso y Piensa como hombre, de James Lopez, presidente de Will Packer Productions, y de Baltasar Kormákur. La película está escrita por Ryan Engle (Rampage, Non-Stop) a partir de una historia original de Jaime Primak Sullivan y cuenta con la producción ejecutiva de Jaime Primak Sullivan y Bernard Bellew.\r\n\r\n', 'estreno6.png', 'https://www.youtube.com/embed/xTANWIJcSIM', 'INDEFINIDO', 'INDEFINIDO', 'TBC', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE `home` (
  `id_pelicula` int(11) NOT NULL,
  `nombre_pelicula` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `tiempo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `url_video` varchar(200) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `disponible` varchar(50) NOT NULL,
  `calificacion` varchar(20) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`id_pelicula`, `nombre_pelicula`, `categoria`, `tiempo`, `descripcion`, `imagen`, `url_video`, `precio`, `idioma`, `disponible`, `calificacion`, `activo`) VALUES
(1, 'THOR: AMOR Y TRUENO', 'ACCIÓN', '2hrs 0min', 'La nueva aventura de El Dios del Trueno, que incluye un viaje al Olimpo reinado por Zeus (Russell Crowe). La película encuentra a Thor (Chris Hemsworth) en un viaje diferente a todo lo que ha enfrentado: una búsqueda de paz interior. Pero su retiro es interrumpido por un asesino de la galaxia conocido como Gorr, el Carnicero de Dioses (Christian Bale), que busca la extinción de los dioses. Para combatir la amenaza, Thor solicita la ayuda del rey Valquiria (Tessa Thompson), Korg (Taika Waititi) y su ex novia Jane Foster (Natalie Portman), quien, para sorpresa de Thor, empuña inexplicablemente su martillo mágico, Mjolnir, como la Poderosa Thor. Juntos, se embarcan en una terrorífica aventura cósmica para descubrir el misterio de la venganza del Carnicero de Dioses y detenerlo antes de que sea demasiado tarde.', 'estreno1.jpg', 'https://www.youtube.com/embed/vKKu-Wt7O2Q', 18.00, 'SUBTITULADO | DOBLADA', '3D,2D,PRIME,XTREME,CONV', 'TE +7', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `pago_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `pelicula_id` int(11) NOT NULL,
  `asientos` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `precio` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`pago_id`, `cliente_id`, `pelicula_id`, `asientos`, `fecha`, `precio`) VALUES
(1, 1, 1, 1, '2022-07-11 07:15:37', 0.00),
(2, 1, 1, 1, '2022-07-11 07:20:19', 0.00),
(14, 1, 6, 1, '2022-07-11 13:13:43', 18.00),
(15, 5, 14, 2, '2022-07-11 20:38:55', 18.00),
(16, 1, 2, 2, '2022-07-11 20:39:35', 20.00),
(17, 1, 1, 1, '2022-07-11 22:59:20', 18.00),
(18, 1, 1, 1, '2022-07-11 23:38:01', 18.00),
(19, 1, 3, 3, '2022-07-12 00:20:56', 18.00),
(20, 1, 4, 5, '2022-07-12 00:27:17', 20.00),
(21, 7, 19, 3, '2022-07-12 03:00:15', 18.00),
(22, 1, 1, 2, '2022-07-13 12:15:33', 18.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(10) NOT NULL,
  `nombre_pelicula` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `tiempo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `url_video` varchar(200) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `disponible` varchar(50) NOT NULL,
  `calificacion` varchar(20) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `nombre_pelicula`, `categoria`, `tiempo`, `descripcion`, `imagen`, `url_video`, `precio`, `idioma`, `disponible`, `calificacion`, `activo`) VALUES
(1, 'THOR: AMOR Y TRUENO', 'ACCIÓN', '2hrs 0min', 'La nueva aventura de El Dios del Trueno, que incluye un viaje al Olimpo reinado por Zeus (Russell Crowe). La película encuentra a Thor (Chris Hemsworth) en un viaje diferente a todo lo que ha enfrentado: una búsqueda de paz interior. Pero su retiro es interrumpido por un asesino de la galaxia conocido como Gorr, el Carnicero de Dioses (Christian Bale), que busca la extinción de los dioses. Para combatir la amenaza, Thor solicita la ayuda del rey Valquiria (Tessa Thompson), Korg (Taika Waititi) y su ex novia Jane Foster (Natalie Portman), quien, para sorpresa de Thor, empuña inexplicablemente su martillo mágico, Mjolnir, como la Poderosa Thor. Juntos, se embarcan en una terrorífica aventura cósmica para descubrir el misterio de la venganza del Carnicero de Dioses y detenerlo antes de que sea demasiado tarde.', 'peli1.png', 'https://www.youtube.com/embed/vKKu-Wt7O2Q', 18.00, 'SUBTITULADO | DOBLADA', '3D,2D,PRIME,XTREME,CONV', 'TE +7', 1),
(2, 'JURASSIC WORLD: DOMINIO', 'AVENTURA', '2hrs 26min', '“Este año, vive la épica conclusión de la era Jurassic mientras dos generaciones se unen por primera vez. Chris Pratt y Bryce Dallas Howard están acompañados por la ganadora del Oscar® Laura Dern, Jeff Goldblum y Sam Neill en Jurassic World: Dominio, una atrevida, oportuna e impresionante nueva aventura que se extiende por todo el mundo. Del arquitecto y director de Jurassic World Colin Trevorrow, Jurassic World: Dominio toma lugar cuatro años después de que la Isla Nublar fue destruida. Los dinosaurios ahora viven-y cazan- entre los humanos alrededor del mundo. Este frágil balance cambiará el futuro y determinará, de una vez por todas, si los seres humanos seguirán siendo los depredadores del ápice en un planeta que ahora comparten con las criaturas más temibles de la historia.”', 'peli2.png', 'https://www.youtube.com/embed/qehG9dKVDG4', 20.00, 'DOBLADA', '2D, CONV', 'TE +7', 1),
(3, 'LIGHTYEAR', 'ANIMACIÓN', '1hrs 45min', 'LIGHTYEAR de Disney y Pixar es una aventura llena de diversión que cuenta la historia del origen de Buzz Lightyear (voz en inglés de Chris Evans), el héroe que inspiró el juguete. LIGHTYEAR presenta al legendario Guardián Espacial en una aventura intergaláctica junto a un grupo de ambiciosos reclutas (voces en inglés de Keke Palmer, Dale Soules y Taika Waititi), y su divertido compañero robot Sox (voz en inglés de Peter Sohn).', 'peli3.png', 'https://www.youtube.com/embed/lKLqrpYNfnA', 18.00, 'SUBTITULADO | DOBLADA', '2D, CONV', 'TE +7', 1),
(4, 'MINIONS NACE UN VILLANO', 'ANIMACIÓN', '1hrs 28min', 'Tiempo antes de convertirse en el maestro de la maldad, Gru es solo un pequeño de 12 años de los suburbios en los 1970s, tramando en gobernar el mundo desde su sótano. No está yendo particularmente bien. Cuando Gru cruza su camino con los Minions, incluyendo a Kevin, Stuart, Bob y Otto- un nuevo Minion con aparatos ortopédicos y una necesidad desesperada de complacer- esta inesperada familia une fuerzas. Juntos, construyen su primera guarida, sus primeras armas y se esfuerzan por ejecutar sus primeras misiones. Cuando el infame grupo de supervillanos, Los Vicio6, expulsa a su líder-el legendario peleador de artes marciales Willy The Kid- Gru, su más devoto admirador, se entrevista para convertirse en su nuevo miembro. Los Vicious 6 no están impresionados por el diminuto, intento de villano, pero después Gru se burla de ellos (y los enfurece) y se convierte en su mayor enemigo mortal en la cúspide del mal. Con Gru huyendo, los Minions intenta dominar el arte del kung fu para salvarlo, y Gru descubre que hasta los villanos necesitan un poco de ayuda de sus amigos.', 'peli4.png', 'https://www.youtube.com/embed/klsYgu5Y9Ww', 20.00, 'DOBLADA', '2D, PRIME, XTREME, CONV', 'TE', 1),
(5, 'TODO EN TODAS PARTES AL MISMO TIEMPO', 'ACCIÓN', '2hrs 20min', 'Todo En Todas Partes Al Mismo Tiempo es una hilarante, entrañable, película de sci-fi, acción y aventura, sobre una mujer Chino-Americana (Michelle Yeoh) que no puede terminar de declarar sus impuestos. Cuando una ruptura Inter dimensional altera la realidad, Evelyn, se ve envuelta en una aventura salvaje en la que solo ella puede salvar el mundo. Perdida en el infinito multiverso, esta heroína inesperada debe canalizar sus nuevos poderes para luchar contra los extraños y desconcertantes peligros del multiverso mientras el destino del mundo pende de un hilo.', 'peli5.png', 'https://www.youtube.com/embed/qhOgSLBtKIE', 18.00, 'SUBTITULADO', '2D, CONV', '+14', 1),
(19, 'TOP GUN: MAVERICK', 'ACCIÓN', '2hrs 17min', 'Después de más de 30 años de servicio como uno de los mejores aviadores de la Marina, Pete \"Maverick\" Mitchell (Tom Cruise) está donde pertenece, emprendiendo su carrera como un valiente piloto de pruebas y esquivando el avance de rango que lo dejaría en tierra. Cuando se encuentra entrenando un grupo de graduados de TOPGUN para una misión especial que ningún piloto vivo ha podido ver, Maverick se encuentra con el teniente Bradley Bradshaw o también conocido como \"Rooster\", el hijo del difunto amigo de Maverick y Oficial de intercepción de radar, el tiente Nick Bradshaw \"Goose\". Enfrentado a un futuro incierto y luchando con los fantasmas de su pasado, Maverick se ve envuelto en una lucha con sus miedos más profundos que terminan llevándolo a una misión que exige el máximo sacrificio de aquellos que serán elegidos para volarla.', 'peli6.png', 'https://www.youtube.com/embed/zzBIzYmxatU', 18.00, 'SUBTITULADO | DOBLADA', '2D, CONV', 'TE +7', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombres`, `usuario`, `clave`) VALUES
(1, 'JAVIER  PAREDES VELASQUEZ', 'admin1', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'HELLENY SOLANCH OVALLE PEREZ', 'admin2', '52c69e3a57331081823331c4e69d3f2e'),
(3, 'JENNIFER MELANIE IBERICO RIOS', 'admin3', '5b1b68a9abf4d2cd155c81a9225fd158'),
(4, 'JUAN CARLOS YACOLCA MALPARTIDA', 'admin4', '96e79218965eb72c92a549dd5a330112'),
(5, 'WALTER IVAN ALAMA HUAMAN', 'admin5', '73882ab1fa529d7273da0db6b49cc4f3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Indices de la tabla `estrenos`
--
ALTER TABLE `estrenos`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- Indices de la tabla `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`pago_id`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estrenos`
--
ALTER TABLE `estrenos`
  MODIFY `id_pelicula` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `home`
--
ALTER TABLE `home`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `pago_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
