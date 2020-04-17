<?php
/*
 * Template Name: Custom RSS Template - WBW Podcast
 * 
 * created by Marc Eliot Stein for WBW podcast
 * based on https://www.wpbeginner.com/wp-tutorials/how-to-create-custom-rss-feeds-in-wordpress/
 *
 * This file must be hand-edited to add podcasts. We do it this way so that we can use the 
 * same Soundcloud account as Talk Nation Radio, with a custom playlist. Since Soundcloud 
 * playlists do not have individual RSS feeds, we must create our own RSS feed.
 *
 */

header('Content-Type: '.feed_content_type('rss-http').'; charset='.get_option('blog_charset'), true);
echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>';
?>
<rss version="2.0" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:atom="http://www.w3.org/2005/Atom">
      <channel>
        <atom:link href="http://feeds.soundcloud.com/users/soundcloud:users:579493218/sounds.rss" rel="self" type="application/rss+xml"/>
        <atom:link href="http://feeds.soundcloud.com/users/soundcloud:users:579493218/sounds.rss?before=590115264" rel="next" type="application/rss+xml"/>
        <title>World BEYOND War: a new podcast</title>
        <link>https://worldbeyondwar.org</link>
        <pubDate>Sun, 28 Apr 2019 23:39:30 +0000</pubDate>
        <lastBuildDate>Sun, 28 Apr 2019 23:39:30 +0000</lastBuildDate>
        <ttl>60</ttl>
        <language>en</language>
        <copyright>All rights reserved</copyright>
        <webMaster>feeds@soundcloud.com (SoundCloud Feeds)</webMaster>
        <description>Welcome to the new podcast from World BEYOND War, a global grassroots network of antiwar activists. Please listen and also get involved!</description>
        <itunes:subtitle>Welcome to the new podcast from World BEYOND War,…</itunes:subtitle>
        <itunes:owner>
          <itunes:name>World Beyond War</itunes:name>
          <itunes:email>feeds@soundcloud.com</itunes:email>
        </itunes:owner>
        <itunes:author>World Beyond War</itunes:author>
        <itunes:explicit>no</itunes:explicit>
        <itunes:image href="http://i1.sndcdn.com/avatars-000572818983-31qcrq-original.jpg"/>
        <image>
          <url>http://i1.sndcdn.com/avatars-000572818983-31qcrq-original.jpg</url>
          <title>World Beyond War</title>
          <link>https://worldbeyondwar.org</link>
        </image>
        <itunes:category text="News &amp; Politics"/>
<item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/767378518</guid>
      <title>Intersections in Ottawa</title>
      <pubDate>Thu, 27 Feb 2020 15:10:11 +0000</pubDate>
      <link>https://soundcloud.com/world-beyond-war/intersections-in-ottawa</link>
      <itunes:duration>00:46:56</itunes:duration>
      <itunes:author>World BEYOND War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>The upcoming #NoWar2020 antiwar conference in Ottawa, Canada will be a convergence of indigenous rights movements, urgency for climate change awareness, protest against military profiteering at the CANSEC weapons bazaar, and, as always, the core principle behind everything we do at World Beyond War: the goal to end all war, everywhere. In this podcast, we hear from four people who will be at #NoWar2020 in Ottawa: organizer Katie Perfitt, longtime resister Colin Stuart, and podcast hosts Marc Eliot Stein and Alex McAdams. Musical interlude: Joni Mitchell.</itunes:summary>
      <itunes:subtitle>The upcoming #NoWar2020 antiwar conference in Ott…</itunes:subtitle>
      <description>The upcoming #NoWar2020 antiwar conference in Ottawa, Canada will be a convergence of indigenous rights movements, urgency for climate change awareness, protest against military profiteering at the CANSEC weapons bazaar, and, as always, the core principle behind everything we do at World Beyond War: the goal to end all war, everywhere. In this podcast, we hear from four people who will be at #NoWar2020 in Ottawa: organizer Katie Perfitt, longtime resister Colin Stuart, and podcast hosts Marc Eliot Stein and Alex McAdams. Musical interlude: Joni Mitchell.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/767378518-world-beyond-war-intersections-in-ottawa.mp3" length="0"/>
      <itunes:image href="http://i1.sndcdn.com/artworks-tfGwyQWFYEPD811d-3zeZfA-original.jpg"/>
    </item>
    <item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/750665104</guid>
      <title>Our Friends in Tehran</title>
      <pubDate>Tue, 28 Jan 2020 22:30:15 +0000</pubDate>
      <link>https://soundcloud.com/world-beyond-war/our-friends-in-tehran</link>
      <itunes:duration>01:14:31</itunes:duration>
      <itunes:author>World BEYOND War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>Shahrzad Khayatian and Foad Izadi are part of the World BEYOND War community in Tehran. Shahrzad has written articles on the effects of sanctions on human lives in Iran, and Foad was a featured speaker at our #NoWar2019 conference in Limerick, Ireland. Following the sudden escalation between USA and Iran in January 2020, Shahrzad and Foad spoke with podcast hosts Marc Eliot Stein and Greta Zarro in the USA about the situation we are all in together. Musical excerpt: &quot;Price of Freedom&quot; by Salome MC.</itunes:summary>
      <itunes:subtitle>Shahrzad Khayatian and Foad Izadi are part of the…</itunes:subtitle>
      <description>Shahrzad Khayatian and Foad Izadi are part of the World BEYOND War community in Tehran. Shahrzad has written articles on the effects of sanctions on human lives in Iran, and Foad was a featured speaker at our #NoWar2019 conference in Limerick, Ireland. Following the sudden escalation between USA and Iran in January 2020, Shahrzad and Foad spoke with podcast hosts Marc Eliot Stein and Greta Zarro in the USA about the situation we are all in together. Musical excerpt: &quot;Price of Freedom&quot; by Salome MC.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/750665104-world-beyond-war-our-friends-in-tehran.mp3" length="0"/>
      <itunes:image href="http://i1.sndcdn.com/avatars-000631811979-oaehnz-original.jpg"/>
    </item>
    <item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/728180197</guid>
      <title>Crisis in Bolivia</title>
      <pubDate>Mon, 16 Dec 2019 00:23:45 +0000</pubDate>
      <link>https://soundcloud.com/world-beyond-war/crisis-in-bolivia</link>
      <itunes:duration>01:01:10</itunes:duration>
      <itunes:author>World BEYOND War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>Medea Benjamin of CODEPINK and economist Ivan Velaszquz of Universidad Mayor San Andres and Konrad Adenauer Foundation in La Paz join Marc Eliot Stein and David Swanson to talk about the current crisis in Bolivia, with special attention to the indigenous rights movement, the question of electoral validity and the problem of external influence on Bolivian politics. Featuring a musical excerpt from Los Kjarkas.</itunes:summary>
      <itunes:subtitle>Medea Benjamin of CODEPINK and economist Ivan Vel…</itunes:subtitle>
      <description>Medea Benjamin of CODEPINK and economist Ivan Velaszquz of Universidad Mayor San Andres and Konrad Adenauer Foundation in La Paz join Marc Eliot Stein and David Swanson to talk about the current crisis in Bolivia, with special attention to the indigenous rights movement, the question of electoral validity and the problem of external influence on Bolivian politics. Featuring a musical excerpt from Los Kjarkas.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/728180197-world-beyond-war-crisis-in-bolivia.mp3" length="0"/>
      <itunes:image href="http://i1.sndcdn.com/artworks-000652420360-gj4j73-original.jpg"/>
    </item>
<item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/702040264</guid>
      <title>Peace Activists in Ireland</title>
      <pubDate>Sat, 26 Oct 2019 15:11:09 +0000</pubDate>
      <link>https://soundcloud.com/world-beyond-war/peace-activists-in-ireland</link>
      <itunes:duration>00:58:28</itunes:duration>
      <itunes:author>World BEYOND War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>Ireland has been a global beacon for peace since the Good Friday agreements of 1998, yet antiwar activists in Ireland are struggling to be heard about PESCO and the illegal use of Shannon Airport by USA military forces. We talk to Barry Sweeney, who brought World BEYOND War's #NoWar2019 conference to Limerick, Ireland, and hear inspiring clips from this conference including Nobel Peace Laureate Mairead Maguire and Afri/Action's John Maguire.</itunes:summary>
      <itunes:subtitle>Ireland has been a global beacon for peace since …</itunes:subtitle>
      <description>Ireland has been a global beacon for peace since the Good Friday agreements of 1998, yet antiwar activists in Ireland are struggling to be heard about PESCO and the illegal use of Shannon Airport by USA military forces. We talk to Barry Sweeney, who brought World BEYOND War's #NoWar2019 conference to Limerick, Ireland, and hear inspiring clips from this conference including Nobel Peace Laureate Mairead Maguire and Afri/Action's John Maguire.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/702040264-world-beyond-war-peace-activists-in-ireland.mp3" length="0"/>
      <itunes:image href="http://i1.sndcdn.com/avatars-000631811979-oaehnz-original.jpg"/>
    </item>
<item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/681139076</guid>
      <title>Educating For Peace</title>
      <pubDate>Sat, 14 Sep 2019 20:17:21 +0000</pubDate>
      <link>https://soundcloud.com/world-beyond-war/educating-for-peace</link>
      <itunes:duration>01:03:02</itunes:duration>
      <itunes:author>World BEYOND War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>What is peace education? Tony Jenkins, Patrick Hiller, and Kozue Akibayashi use teaching and academic research to illuminate their activities against war. These three educators also contributed to &quot;A Global Security System&quot;, the book that describes World BEYOND War's platform. They join Marc Eliot Stein and Greta Zarro to talk about conflict resolution, peace science, feminism and the ways in which personal relationships can reflect and project violence.</itunes:summary>
      <itunes:subtitle>What is peace education? Tony Jenkins, Patrick Hi…</itunes:subtitle>
      <description>What is peace education? Tony Jenkins, Patrick Hiller, and Kozue Akibayashi use teaching and academic research to illuminate their activities against war. These three educators also contributed to &quot;A Global Security System&quot;, the book that describes World BEYOND War's platform. These three educators join Marc Eliot Stein and Greta Zarro to talk about conflict resolution, peace science, feminism and the ways in which personal relationships can reflect and project violence.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/681139076-world-beyond-war-educating-for-peace.mp3" length="0"/>
      <itunes:image href="http://i1.sndcdn.com/avatars-000631811979-oaehnz-original.jpg"/>
    </item>
<item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/666707525</guid>
      <title>War and Environment</title>
      <pubDate>Fri, 16 Aug 2019 14:39:39 +0000</pubDate>
      <link>https://soundcloud.com/world-beyond-war/war-and-environment</link>
      <itunes:duration>00:54:28</itunes:duration>
      <itunes:author>World BEYOND War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>Antiwar activists and environmental activists need to work together. Why doesn't this happen more often? In this episode of the World BEYOND War podcast, Ashik Siddique of the National Priorities Project and Alex Beauchamp of Food &amp; Water Watch join Greta Zarro and Marc Eliot Stein to talk about the research and advocacy work they do every day, and how we can build bridges between two movements dedicated to the same urgent cause: saving our planet and all the lives that depend on it.</itunes:summary>
      <itunes:subtitle>Antiwar activists and environmental activists nee…</itunes:subtitle>
      <description>Antiwar activists and environmental activists need to work together. Why doesn't this happen more often? In this episode of the World BEYOND War podcast, Ashik Siddique of the National Priorities Project and Alex Beauchamp of Food &amp; Water Watch join Greta Zarro and Marc Eliot Stein to talk about the research and advocacy work they do every day, and how we can build bridges between two movements dedicated to the same urgent cause: saving our planet and all the lives that depend on it.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/666707525-world-beyond-war-war-and-environment.mp3" length="0"/>
      <itunes:image href="http://i1.sndcdn.com/avatars-000631811979-oaehnz-original.jpg"/>
    </item>
<item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/654019643</guid>
      <title>Fiction and Activism</title>
      <pubDate>Sun, 21 Jul 2019 00:00:00 +0000</pubDate>
      <link>https://soundcloud.com/world-beyond-war/fiction-and-activism</link>
      <itunes:duration>00:57:41</itunes:duration>
      <itunes:author>World BEYOND War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>Two notable literary novelists, Roxana Robinson (&quot;Sparta&quot;, &quot;Dawson's Fall&quot;) and Dawn Tripp (&quot;Georgia&quot;, &quot;Game of Secrets&quot;) join regular hosts Marc Eliot Stein and Greta Zarro for a unique discussion of the ways both fiction writers and antiwar activists try to use words to connect with strangers on urgent and heartfelt topics. We discuss USA in 2019, modern tribalism, the Quaker community, the legacy of slavery, gender and intersectionality and much more.</itunes:summary>
      <itunes:subtitle>Two notable literary novelists, Roxana Robinson (…</itunes:subtitle>
      <description>Two notable literary novelists, Roxana Robinson (&quot;Sparta&quot;, &quot;Dawson's Fall&quot;) and Dawn Tripp (&quot;Georgia&quot;, &quot;Game of Secrets&quot;) join regular hosts Marc Eliot Stein and Greta Zarro for a unique discussion of the ways both fiction writers and antiwar activists try to use words to connect with strangers on urgent and heartfelt topics. We discuss USA in 2019, modern tribalism, the Quaker community, the legacy of slavery, gender and intersectionality and much more.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/654019643-world-beyond-war-fiction-and-activism.mp3" length="69232362"/>
      <itunes:image href="http://i1.sndcdn.com/avatars-000631811979-oaehnz-original.jpg"/>
    </item>
<item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/642905856</guid>
      <title>Taking Stock: How Is The Antiwar Movement Doing?</title>
      <pubDate>Thu, 27 Jun 2019 16:24:00 +0000</pubDate>
      <link>https://soundcloud.com/world-beyond-war/taking-stock-how-is-the-antiwar-movement-doing</link>
      <itunes:duration>00:55:32</itunes:duration>
      <itunes:author>World BEYOND War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>How is the antiwar movement staying focused and unified as shocking provocations and unconscionable moral threats demand our attention, from USA to Iran to Venezuela to Gaza?  In this special episode of the World BEYOND War podcast, WBW's board president Leah Bolger and executive director David Swanson join Greta Zarro and Marc Eliot Stein for an honest and realistic look at the challenges, concerns and hopes that are on the minds of all antiwar activists in these urgent times.</itunes:summary>
      <itunes:subtitle>How is the antiwar movement staying focused and u…</itunes:subtitle>
      <description>How is the antiwar movement staying focused and unified as shocking provocations and unconscionable moral threats demand our attention, from USA to Iran to Venezuela to Gaza?  In this special episode of the World BEYOND War podcast, WBW's board president Leah Bolger and executive director David Swanson join Greta Zarro and Marc Eliot Stein for an honest and realistic look at the challenges, concerns and hopes that are on the minds of all antiwar activists in these urgent times.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/642905856-world-beyond-war-taking-stock-how-is-the-antiwar-movement-doing.mp3" length="66647813"/>
      <itunes:image href="http://i1.sndcdn.com/artworks-000558270279-b9psc0-original.jpg"/>
    </item>
        <item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/625937295</guid>
      <title>Art and Activism</title>
      <pubDate>Fri, 24 May 2019 15:25:54 +0000</pubDate>
      <link>https://soundcloud.com/world-beyond-war/art-and-activism</link>
      <itunes:duration>00:52:24</itunes:duration>
      <itunes:author>World BEYOND War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>We're talking about how art can amplify activism, elevate messages, grow movements and influence change. For episode 4 of the World BEYOND War podcast, Kim Fraczek and Vy Vu join Greta Zarro and Marc Eliot Stein.</itunes:summary>
      <itunes:subtitle>We're talking about how art can amplify activism,…</itunes:subtitle>
      <description>We're talking about how art can amplify activism, elevate messages, grow movements and influence change. For episode 4 of the World BEYOND War podcast, Kim Fraczek of Sane Energy Project and Hanoi/DC-based activist Vy Vu join Greta Zarro and Marc Eliot Stein and talk about their experiences with creative activism, intersectionality, identity and where the antiwar movement is today.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/625937295-world-beyond-war-art-and-activism.mp3" length="62882007"/>
      <itunes:image href="http://i1.sndcdn.com/artworks-000540833439-4j9hvd-original.jpg"/>
    </item>
        <item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/612863406</guid>
      <title>Inside The Venezuelan Embassy In Washington DC</title>
      <pubDate>Sun, 28 Apr 2019 23:39:30 +0000</pubDate>
      <link>https://soundcloud.com/worldbeyondwar/world-beyond-war-3-inside-the-venezuelan-embassy-in-washington-dc</link>
      <itunes:duration>00:48:51</itunes:duration>
      <itunes:author>World Beyond War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>In April 2019, an informal coalition of antiwar organizations including CodePink, Popular Resistance and ANSWER began protecting the Venezuelan embassy in Washington DC from an attempted takeover by the US federal government. We spoke to Margaret Flowers of Popular Resistance and Pat Elder of World BEYOND War, who are both inside the Venezuelan embassy and facing imminent arrest for resisting an ongoing regime change operation that endangers human lives with severe sanctions and threats of war.</itunes:summary>
      <itunes:subtitle>In April 2019, an informal coalition of antiwar o…</itunes:subtitle>
      <description>In April 2019, an informal coalition of antiwar organizations including CodePink, Popular Resistance and ANSWER began protecting the Venezuelan embassy in Washington DC from an attempted takeover by the US federal government. We spoke to Margaret Flowers of Popular Resistance and Pat Elder of World BEYOND War, who are both inside the Venezuelan embassy and facing imminent arrest for resisting an ongoing regime change operation that endangers human lives with severe sanctions and threats of war.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/612863406-worldbeyondwar-world-beyond-war-3-inside-the-venezuelan-embassy-in-washington-dc.mp3" length="0"/>
      <itunes:image href="http://i1.sndcdn.com/avatars-000572818983-31qcrq-original.jpg"/>
    </item>
    <item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/590115264</guid>
      <title>Talking About #NoToNATO with Greta Zarro, Marc Eliot Stein, Shabbir Lakha and Liz Remmerswaal Hughes</title>
      <pubDate>Thu, 14 Mar 2019 19:15:20 +0000</pubDate>
      <link>https://soundcloud.com/worldbeyondwar/world-beyond-war-talking-about-notonato-with-greta-zarro-marc-eliot-stein-shabbir-lakha-and-liz-remmerswaal-hughes</link>
      <itunes:duration>00:59:24</itunes:duration>
      <itunes:author>World Beyond War</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>World BEYOND War's #NoToNATO rally and peace festival will &quot;unwelcome&quot; NATO, the world's most powerful military alliance, to Washington DC in April 2019. What is #NoToNATO all about? We've gathered four determined peace activists to share their own thoughts and perspectives on this often controversial and difficult topic: Shabbir Lakha from London, Liz Remmerswaal Hughes from New Zealand, Marc Eliot Stein and Greta Zarro from USA. More info about the Washington DC event at https://notonato.org.</itunes:summary>
      <itunes:subtitle>World BEYOND War's #NoToNATO rally and peace fest…</itunes:subtitle>
      <description>World BEYOND War's #NoToNATO rally and peace festival will &quot;unwelcome&quot; NATO, the world's most powerful military alliance, to Washington DC in April 2019. What is #NoToNATO all about? We've gathered four determined peace activists to share their own thoughts and perspectives on this often controversial and difficult topic: Shabbir Lakha from London, Liz Remmerswaal Hughes from New Zealand, Marc Eliot Stein and Greta Zarro from USA. More info about the Washington DC event at https://notonato.org.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/590115264-worldbeyondwar-world-beyond-war-talking-about-notonato-with-greta-zarro-marc-eliot-stein-shabbir-lakha-and-liz-remmerswaal-hughes.mp3" length="48707116"/>
      <itunes:image href="http://i1.sndcdn.com/artworks-000504081243-dl6aae-original.jpg"/>
    </item>
<item>
      <guid isPermaLink="false">tag:soundcloud,2010:tracks/565356660</guid>
      <title>World Beyond War Fifth Anniversary Roundtable with David Hartsough, David Swanson, Leah Bolger</title>
      <pubDate>Sun, 27 Jan 2019 14:16:19 +0000</pubDate>
      <link>https://soundcloud.com/marc-eliot-stein/world-beyond-war-fifth-anniversary-roundtable-with-david-hartsough-david-swanson-leah-bolger</link>
      <itunes:duration>01:16:30</itunes:duration>
      <itunes:author>Marc Eliot Stein</itunes:author>
      <itunes:explicit>no</itunes:explicit>
      <itunes:summary>On the fifth anniversary of the founding of World Beyond War, Marc Eliot Stein interviewed three of the founders, David Hartsough, David Swanson and Leah Bolger, to discuss five years of World Beyond War.</itunes:summary>
      <itunes:subtitle>On the fifth anniversary of the founding of World…</itunes:subtitle>
      <description>On the fifth anniversary of the founding of World Beyond War, Marc Eliot Stein interviewed three of the founders, David Hartsough, David Swanson and Leah Bolger, to discuss five years of World Beyond War.</description>
      <enclosure type="audio/mpeg" url="http://feeds.soundcloud.com/stream/565356660-marc-eliot-stein-world-beyond-war-fifth-anniversary-roundtable-with-david-hartsough-david-swanson-leah-bolger.mp3" length="62147913"/>
      <itunes:image href="http://i1.sndcdn.com/artworks-000478484985-k4jdcd-original.jpg"/>
    </item>
      </channel>
    </rss>
