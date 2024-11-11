-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 07:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(1, 'Sports', 3),
(2, 'Entertainment ', 3),
(3, 'Politics', 2),
(4, 'Health', 2);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(49, 'Anime Reviews', 'Anime reviews dive into storylines, character development, animation quality, soundtrack, and overall impact to help viewers find new series or revisit classics. Anime spans various genres, from action-packed shounen to thought-provoking psychological thrillers and heartwarming slice-of-life shows, allowing for diverse reviews that cater to unique tastes.\n\nAn engaging anime review typically covers key plot points without spoilers, giving an idea of what to expect while preserving surprises. Character depth and evolution are crucial in anime, as well-written protagonists or complex antagonists can greatly enhance the viewing experience. For example, a review of \"Attack on Titan\" would highlight its thrilling storyline and intricate characters, like Eren Jaeger, whose motivations spark both empathy and debate. Reviews of comedies like \"One Punch Man\" focus on the hilarious subversion of superhero tropes, while dramas like \"Your Lie in April\" might discuss emotional themes and how the animation enhances its storytelling.\n\nProduction quality and soundtrack are also focal points, as stellar visuals and fitting music often elevate an anime’s atmosphere. Honest critiques of pacing, dialogue, or animation flaws provide balanced perspectives, helping anime fans decide what’s worth watching next. Through thoughtful reviews, anime enthusiasts share insights that celebrate both the art and intricacies of the medium.', '3', '08 Nov, 2024', 30, '1731046714-anime review.jpg'),
(50, 'Classic Music Hits', 'The 1990s were a golden era for classic music, marked by the dominance of grunge, hip-hop, R&B, and the explosion of alternative rock, shaping sounds that remain influential today. Bands like Nirvana, Pearl Jam, and Soundgarden led the grunge movement, capturing the angst of the era with hits like Nirvana\'s \"Smells Like Teen Spirit\" and Pearl Jam’s \"Alive,\" giving voice to a generation that resonated with raw and rebellious music.\n\nR&B thrived in the \'90s as well, with artists like Whitney Houston, Mariah Carey, and Boyz II Men delivering iconic ballads and soulful anthems. Whitney Houston’s powerful rendition of \"I Will Always Love You\" and Mariah Carey’s \"Hero\" became timeless classics, showcasing vocal talent that set high standards for the genre. \n\nMeanwhile, hip-hop became a cultural force, evolving with influential albums from Tupac Shakur, The Notorious B.I.G., and Nas. Tracks like Tupac’s \"California Love\" and Nas’s \"If I Ruled the World\" represented themes of struggle, empowerment, and social issues.\n\nPop music flourished as well, with artists like Madonna, Michael Jackson, and the Spice Girls, who brought infectious energy and style to global stages. Together, these genres defined the \'90s, offering music that still resonates with listeners and inspires modern artists.', '4', '08 Nov, 2024', 28, '1731046694-musics.jpg'),
(51, 'Health Benefits of Meditation', 'Meditation offers a wide range of health benefits, improving both mental and physical well-being through regular practice. One of the primary benefits is stress reduction. Meditation calms the mind and lowers cortisol levels, the body’s primary stress hormone, which can help reduce anxiety, improve mood, and create a sense of inner peace.\n\nMeditation is also linked to enhanced emotional health. By fostering mindfulness and self-awareness, it allows individuals to better manage negative emotions and reactions, leading to greater emotional resilience. Studies have shown that meditation can reduce symptoms of depression and anxiety, as it rewires parts of the brain associated with emotional regulation and empathy.\n\nPhysically, meditation supports heart health by reducing blood pressure, improving circulation, and lowering the risk of cardiovascular disease. It also strengthens immune function by decreasing stress-induced inflammation, which can be beneficial for overall health and longevity. Moreover, meditation promotes better sleep by helping individuals manage racing thoughts and find a sense of relaxation, which improves sleep quality and reduces insomnia.\n\nCognitive benefits are also notable, with meditation improving focus, attention span, and memory. Regular practitioners often report increased mental clarity and creativity, which can enhance productivity and problem-solving skills. Overall, meditation offers accessible, scientifically-backed benefits that support a balanced, healthier life.', '2', '08 Nov, 2024', 32, '1731046682-meditation.jpeg'),
(52, 'TechCrunch News', 'Here are some key trends and innovations currently making waves in tech:\n\n1. **Artificial Intelligence (AI) and Machine Learning**: AI continues to lead, with generative AI models like ChatGPT and Midjourney expanding into creative fields, software development, and customer service. Companies are adopting AI for automation, data analysis, and personalized customer experiences. AI advancements also include ethical concerns and new regulations to address privacy and bias.\n\n2. **Quantum Computing**: Quantum computing is pushing toward practical applications. Giants like IBM, Google, and startups like IonQ are racing to improve quantum processors. Quantum breakthroughs are poised to transform areas like drug discovery, logistics, cryptography, and complex problem-solving beyond the capabilities of traditional computing.\n\n3. **5G and Connectivity**: 5G adoption is growing, especially in mobile and IoT devices, enabling faster internet speeds, low latency, and more connected devices. This is boosting sectors like autonomous vehicles, smart cities, and real-time data applications.\n\n4. **Cybersecurity**: With cyberattacks becoming more sophisticated, cybersecurity tools are advancing, using AI to detect threats in real time and blockchain to secure data. Trends include Zero Trust Architecture and cybersecurity mesh, which improve security across interconnected systems.\n\n5. **Metaverse and VR/AR**: Although still evolving, the metaverse concept is expanding, with companies investing in augmented and virtual reality for social, gaming, and work applications. Meta (formerly Facebook), Apple, and Google are all advancing VR/AR hardware and platforms, hoping to unlock new ways to interact in digital spaces.\n\n6. **Green Tech and Sustainability**: Climate-conscious tech solutions are emerging, such as carbon capture technologies, renewable energy innovations, and sustainable production practices. Electric vehicle (EV) technology is also advancing, with longer-lasting batteries, expanding EV networks, and autonomous capabilities.\n\nEach of these trends is transforming industries and creating new opportunities for businesses and developers alike. If you\'re interested in diving deeper into any of these areas, I can provide more specific updates!', '1', '08 Nov, 2024', 33, '1731046663-tech crunch.jpeg'),
(53, 'Dinosaur Fossils', 'Dinosaur fossils provide an incredible window into the distant past, preserving the remains of creatures that roamed the Earth millions of years ago. Fossils, which are the mineralized remains or impressions of once-living organisms, reveal insights into the biology, behavior, and environment of ancient species. Dinosaur fossils range from complete skeletons to isolated bones, teeth, and even footprints.\n\nPaleontologists study these fossils to understand different dinosaur species, their diets, and their evolutionary history. Fossils can be found all over the world, but some of the richest fossil beds are in North America, China, Argentina, and Mongolia. Notable dinosaur fossils, like those of *Tyrannosaurus rex* and *Triceratops*, are iconic, showcasing the diversity and size of these animals. Meanwhile, feathered dinosaur fossils, particularly from China, have provided evidence of the evolutionary link between dinosaurs and modern birds.\n\nThe process of fossilization is rare and depends on specific conditions where organic material is buried under sediment, gradually replaced by minerals. This can take millions of years, making each fossil discovery precious. Advances in technology, like CT scanning, help paleontologists study fossils in detail without damaging them, continually expanding our understanding of these ancient giants.', '3', '08 Nov, 2024', 34, '1731046632-dinosur fossils.jpeg'),
(54, 'Cricket World Records', 'Cricket has produced a wide array of world records across different formats, highlighting remarkable performances in batting, bowling, and fielding. Here are some iconic cricket world records:\n\n1. **Highest Individual Score in Test Cricket**: Brian Lara of the West Indies holds the record with an unbeaten 400 runs against England in 2004, an extraordinary display of skill and endurance.\n\n2. **Fastest Century in ODI Cricket**: AB de Villiers from South Africa scored the fastest century off just 31 balls against the West Indies in 2015, showcasing his explosive power-hitting ability.\n\n3. **Highest Team Score in ODI**: England set the record for the highest team score in One Day Internationals, posting 498/4 against the Netherlands in 2022.\n\n4. **Most Runs in a Calendar Year (Tests)**: Mohammad Yousuf of Pakistan scored 1,788 runs in 2006, a record for the most runs in a single calendar year in Test matches.\n\n5. **Most Wickets in Test Cricket**: Muttiah Muralitharan of Sri Lanka holds the record with 800 Test wickets, an achievement of remarkable longevity and skill.\n\n6. **Most Sixes in International Cricket**: Chris Gayle from the West Indies is renowned for his power, holding the record with over 550 sixes across formats.\n\n7. **Longest Unbeaten Streak**: Australia holds the record for the longest winning streak in Test cricket, winning 16 matches consecutively twice, once in 1999-2001 and again in 2005-2008.\n\nThese records capture the extraordinary moments and players that have defined cricket’s rich history.', '1', '08 Nov, 2024', 28, '1731046614-cricket.jpg'),
(55, 'Mindfulness Practices', 'Mindful practices involve intentionally focusing on the present moment without judgment, often to reduce stress, enhance well-being, and improve mental clarity. These practices are rooted in mindfulness, a concept borrowed from Buddhist meditation, but have been adapted for secular use to benefit people in everyday life. Here are some common mindful practices:\n\n1. **Mindful Breathing**: This practice focuses on the breath, paying attention to each inhale and exhale. It can be done anywhere and is often used to calm the mind in stressful situations.\n\n2. **Body Scan**: This involves mentally scanning the body from head to toe, paying attention to areas of tension or discomfort. It helps increase body awareness and relax the body.\n\n3. **Mindful Walking**: While walking, you focus on the sensation of each step, the movement of your body, and the environment around you. This practice connects you to the present moment and can be especially grounding.\n\n4. **Mindful Eating**: This involves paying full attention to the experience of eating—savoring each bite, noticing the textures, flavors, and smells of food, and listening to your body’s hunger and fullness cues.\n\n5. **Loving-Kindness Meditation**: This meditation focuses on developing compassion and kindness, both towards yourself and others. It involves silently repeating phrases like \"May I be happy, may I be healthy\" and gradually expanding those wishes to others.\n\n6. **Mindful Listening**: This practice involves listening fully to someone or something without interrupting or forming judgments, simply allowing the sounds to wash over you and focusing entirely on the listening experience.\n\n7. **Guided Meditation**: These meditations often involve listening to a teacher or recording that guides you through a mindfulness or relaxation exercise. It can include visualization, breathing, and other relaxation techniques.\n\nIncorporating these practices into daily life can enhance mental clarity, reduce stress, improve emotional regulation, and foster a greater sense of connection with the world around you.', '2', '08 Nov, 2024', 29, '1731046601-Mindfull.jpeg'),
(56, 'Gaming Trends 2024', 'The gaming industry in 2024 is seeing several exciting trends that are reshaping the landscape. One of the most notable developments is the integration of **Artificial Intelligence (AI)**. AI is being used to enhance non-playable characters (NPCs), create dynamic game environments, and offer personalized experiences for players. This makes the gameplay feel more interactive and adaptive.\n\nAnother key trend is the growing influence of **Metaverse integration** in gaming. This concept allows players to engage in immersive virtual worlds where they can interact, attend events, and even socialize, blending gaming with social experiences. Alongside this, **online pokies** or slot games continue to rise in popularity, particularly due to their easy-to-play format and engaging features.\n\nIndie games are also gaining momentum in 2024. Platforms like Steam and crowdfunding sites such as Kickstarter have enabled small developers to bring unique and innovative games to a broader audience, offering fresh stories and gameplay mechanics.\n\nFinally, **augmented reality (AR) and virtual reality (VR)** technologies continue to push boundaries, offering more immersive and interactive experiences that are redefining how players engage with games. These trends are expected to continue evolving, contributing to the exciting future of gaming.', '4', '08 Nov, 2024', 30, '1731046588-Game Trends.jpeg'),
(57, 'AI in Everyday Life', 'AI is increasingly woven into the fabric of our daily lives, offering convenience, efficiency, and personalized experiences across various sectors. In **smart homes**, AI-driven devices such as thermostats, lighting systems, and security cameras adapt to user habits, improving comfort and energy efficiency while enhancing security. In the **banking sector**, AI is employed for fraud detection, customer support, and personalizing financial advice, ensuring safety and boosting customer satisfaction.\n\nAI also plays a major role in **education**, with adaptive learning systems that tailor content to individual needs, and AI tutors offering personalized assistance to students. In **transportation**, AI is pivotal in developing autonomous vehicles and optimizing traffic management, aiming to make commuting safer and more efficient.\n\nMoreover, AI is enhancing **healthcare**, from personalized health tracking apps to robotic surgery systems, and making **environmental conservation** efforts more effective by monitoring and predicting climate change impacts.\n\nAI is not just transforming industries but also simplifying everyday tasks, making it an indispensable part of modern life. For more details on how AI is used in daily life, you can explore various applications across sectors.', '2', '08 Nov, 2024', 35, '1731046577-AI.jpeg'),
(58, 'Space Exploration 2024', 'Space exploration in 2024 is marked by bold advancements, international cooperation, and a continued push towards deep-space missions. NASA’s Artemis program is driving efforts to return humans to the Moon, with the goal of establishing a sustainable lunar base that serves as a stepping stone for Mars exploration. Artemis III, set to carry the first woman and next man to the Moon, will test technologies critical for long-duration space missions, including habitats, energy systems, and in-situ resource utilization.\n\nThe private sector is playing a crucial role, with SpaceX, Blue Origin, and other companies advancing reusable rockets and cargo missions. SpaceX’s Starship, designed for Mars colonization, is undergoing test flights, inching closer to its first crewed mission. The International Space Station (ISS) remains a hub of research and development, but plans are underway to retire it by the end of the decade, paving the way for new commercial space stations.\n\nInternationally, China\'s Tiangong Space Station and India’s Chandrayaan lunar missions show increasing global interest and collaboration in space. Additionally, the European Space Agency and Japan are partnering in lunar and Martian exploration projects. The year 2024 emphasizes sustainable, long-term space presence, aiming to unlock the mysteries of our solar system and, eventually, explore interstellar space.', '1', '08 Nov, 2024', 36, '1731046441-space.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(30, 'AMRISH', 'UPADHYAY', 'amrish123', '21232f297a57a5a743894a0e4a801fc3', 0),
(31, 'Anirudh', 'Yadav', 'ani123', '21232f297a57a5a743894a0e4a801fc3', 1),
(32, 'Mukesh', 'Yadav', 'muku123', '0192023a7bbd73250516f069df18b500', 1),
(28, 'Tushar', 'Maji', 'tushar123', '21232f297a57a5a743894a0e4a801fc3', 1),
(29, 'Salman', 'Khan', 'salman', '03346657feea0490a4d4f677faa0583d', 0),
(33, 'AVNISH', 'UPADHYAY', 'av123', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
