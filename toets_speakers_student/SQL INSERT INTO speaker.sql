SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

INSERT INTO `speakers` (`id`, `name`, `img`, `soundquality`, `batterylife`, `waterresistant`, `description`, `brandId`) VALUES
(1, 'JBL Boombox', 'jbl_Boombox.jpeg', 'Uitstekend', 24, 'ja', 'De JBL Boombox is een draagbare speaker met een stevig basgeluid. Het basgeluid wordt geproduceerd door 4 actieve transducers en 2 bas radiatoren. Dankzij de waterdichte behuizing gebruik je de Bluetooth speaker ook zonder problemen op het strand of bij een zwembad.', 0),
(2, 'JBL Charge', 'jbl_charge.jpeg', 'Zeer goed', 20, 'ja', 'Met de JBL Charge 4 ben je onafscheidelijk van je favoriete muziek. Deze Bluetooth speaker heeft een accuduur van 20 uur. Hierdoor kom je tijdens een dag uit naar het zwembad of strand niet zonder muziek te zitten. Is de accu leeg? Binnen 5,5 uur laad je het exemplaar volledig op. Zo heb je na een korte nacht opladen weer een volle accu tot je beschikking.', 0),
(3, 'JBL Xtreme', 'jbl_Xtreme2.jpeg', 'Topklasse', 15, 'ja', 'Neem de JBL Xtreme 2 mee naar een festival, een dagje strand of een weekendje weg. Deze bluetooth speaker heeft een waterbestendige behuizing. Hierdoor leg je de speaker probleemloos in het gras of langs de waterkant. Dankzij een accuduur van 15 uur kom je niet snel zonder muziek te zitten. Een lege telefoon voorkom je door deze op te laden via de usb poort op de speaker. De speaker koppel je via de JBL app aan meerdere JBL speakers. Koppel maximaal 2 telefoons aan de speakers en bedien de speakers met meerdere mensen.', 0),
(4, 'Bose SoundLink Micro', 'bose_SoundLink_Micro.jpeg', 'goed', 6, 'Waterdicht', 'Het maakt niet uit wat voor weer het is of waar je bent, met de Bose SoundLink Micro luister je altijd naar je favoriete muziek. De Bluetooth speaker is volledig waterdicht, waardoor je de speaker kunt natmaken, maar ook volledig onderdompelt. Je bevestigt de speaker stevig aan je tas met de stevige draagband. Zo luister je met vrienden naar muziek als je een stuk gaat lopen of fietsen. ', 0),
(5, 'Bose SoundLink Revolve', 'Bose_SoundLink_Revolve.jpeg', 'Zeer goed', 12, 'ja', 'De Bose SoundLink Revolve geeft voor een kleine speaker een verrassend vol geluid. De speaker is spatwaterdicht. Hierdoor is hij ideaal voor een barbecue bij het zwembad of een feestje. De speaker geeft 360 graden geluid. Het geluid wordt gelijkmatig over de ruimte verspreid. Dankzij de accuduur van 12 uur kun je de speaker de hele dag gebruiken. Koppel een tweede speaker aan de Revolve om deze in party- of stereomodus te gebruiken. Met de Bose Connect app beheer je de gekoppelde apparaten.', 0);


INSERT INTO `brand` (`id`, `name`) VALUES
(1, 'JBL'),
(2, 'Bose'),
(3, 'Sony');


COMMIT;