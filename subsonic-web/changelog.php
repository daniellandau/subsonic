<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    $current = 'changelog';
    include("header.php");
?>

<body class="section-home page-home">

<a name="top"/>

<div id="container">
<?php include("menu.php");?>

<div id="content">
<div id="main-col">
<h1>Subsonic Change Log</h1>

<a name="3.5"/>
<h2 class="div">Subsonic 3.5 - Sep XX, 2008</h2>
<ul>
    <li><span class="bugid">New:</span> Smooth scrolling in jump list.</li>
    <li><span class="bugid">Bugfix:</span> Added start menu item "Settings" as work-around for missing tray icon in
        Vista.
    </li>
    <li><span class="bugid">Bugfix:</span> Improved Windows installer. (<a
            href="http://www.activeobjects.no/subsonic/forum/viewtopic.php?t=1291">More</a>)
    </li>
</ul>

<a name="3.5.beta2"/>
<h2 class="div">Subsonic 3.5.beta2 - Sep 23, 2008</h2>
<ul>
    <li><span class="bugid">New:</span> Fancy cover art zoom.</li>
    <li><span class="bugid">New:</span> Remove artist name from album name.</li>
    <li><span class="bugid">New:</span> Transcoding pack is now included in Windows installer.</li>
    <li><span class="bugid">New:</span> Updated German translation (thanks to J&ouml;rg Frommann) and Norwegian translation
        (thanks to jigsaw).
    </li>
    <li><span class="bugid">New:</span> Added French translation (thanks to JohnDillinger).
    <li><span class="bugid">New:</span> Added Ripserver theme.</li>
    <li><span class="bugid">Bugfix:</span> Streaming to mobile phones now works better.</li>
    <li><span class="bugid">Bugfix:</span> Made tray icon work on Vista (requires Java 6 or later).</li>
    <li><span class="bugid">Bugfix:</span> Disable random playlist functionality if user is not authorized to play
        music.
    </li>
    <li><span class="bugid">Tech:</span> Build number is now identical to Subversion revision.</li>
</ul>


<a name="3.5.beta1"/>
<h2 class="div">Subsonic 3.5.beta1 - Jul 10, 2008</h2>
<ul>
    <li><span class="bugid">New:</span> Implemented music player for Java-enabled mobile phones.
        (<a href="http://www.activeobjects.no/subsonic/forum/viewtopic.php?t=1203">More</a>)
    </li>
    <li><span class="bugid">New:</span> Support for personal images (avatars).</li>
    <li><span class="bugid">New:</span> Support "read-only" view.
        (<a href="http://www.activeobjects.no/subsonic/forum/viewtopic.php?p=2435">More</a>)
    </li>
    <li><span class="bugid">New:</span> Simplified user interface in settings pages. Now only one "Save" button.</li>
    <li><span class="bugid">New:</span> Improved usability of coverart search page. Now also searches discogs.com.</li>
    <li><span class="bugid">New:</span> Merge artists with same name, but located in different music folders.</li>
    <li><span class="bugid">New:</span> Added option "Let others see what I am playing"</li>
    <li><span class="bugid">New:</span> Added option "Always use web player".
        (<a href="http://www.activeobjects.no/subsonic/forum/viewtopic.php?t=1077">More</a>)
    </li>
    <li><span class="bugid">New:</span> Nicer controls in modern browsers (Opera 9.5, Firefox 3, IE 7).</li>
    <li><span class="bugid">Bugfix:</span> Lots of extra players are no longer created.</li>
    <li><span class="bugid">Bugfix:</span> Fix minor bug with letter appearing if only file (not directory) exists.
        (<a href="http://www.activeobjects.no/subsonic/forum/viewtopic.php?t=1023">More</a>)
    </li>
    <li><span class="bugid">Bugfix:</span> Make standalone version work on Linux without X11 server.</li>
    <li><span class="bugid">Bugfix:</span> Make lyrics work again.
        (<a href="http://www.activeobjects.no/subsonic/forum/viewtopic.php?p=2588">More</a>)
    </li>
    <li><span class="bugid">Bugfix:</span> Proper sorting of "The" artists.
        (<a href="http://www.activeobjects.no/subsonic/forum/viewtopic.php?t=1144">More</a>)
    </li>
    <li><span class="bugid">Bugfix:</span> Make source release build.</li>
</ul>


<a name="3.4"/>
<h2 class="div">Subsonic 3.4 - Apr 27, 2008</h2>
<ul>
    <li><span class="bugid">New:</span> Added optional setting for LDAP bind DN and password.</li>
    <li><span class="bugid">New:</span> Added quick links to Google, Wikipedia, allmusic and Last.fm.</li>
    <li><span class="bugid">New:</span> Added standalone installation option.</li>
    <li><span class="bugid">Bugfix:</span> Fixed layout problems in Podcast page.</li>
    <li><span class="bugid">Bugfix:</span> Clean up partially downloaded Podcast episodes at start-up.</li>
    <li><span class="bugid">Bugfix:</span> Old Podcast episodes were in some cases not deleted.</li>
</ul>


<a name="3.4.beta1"/>
<h2 class="div">Subsonic 3.4.beta1 - Mar 28, 2008</h2>
<ul>
    <li><span class="bugid">New:</span> Added support for user authentication in LDAP, including Microsoft Active
        Directory.
    </li>
    <li><span class="bugid">New:</span> Implemented "Party mode" with a simpler user interface.</li>
    <li><span class="bugid">New:</span> Added option to specify music folder in "Random playlist".</li>
    <li><span class="bugid">New:</span> Added option "Play more random songs when end of playlist is reached" in "Random
        playlist".
    </li>
    <li><span class="bugid">New:</span> Implemented download option in WAP interface.</li>
    <li><span class="bugid">New:</span> Implemented random playlist option in WAP interface.</li>
    <li><span class="bugid">New:</span> Make index always visible (doesn't work in IE).</li>
    <li><span class="bugid">New:</span> Added play/add/download buttons for songs in left frame.</li>
    <li><span class="bugid">New:</span> Suggest track number in tag editor.</li>
    <li><span class="bugid">Bugfix:</span> Fixed faulty layout in main frame.</li>
    <li><span class="bugid">Bugfix:</span> Fixed caching bug of left frame (when changing theme etc).</li>
    <li><span class="bugid">Bugfix:</span> "Highest rated" now also shows albums that have never been played.</li>
    <li><span class="bugid">Bugfix:</span> Player selection in WAP interface now works.</li>
    <li><span class="bugid">Bugfix:</span> Support quotes in search field and shortcut field.</li>
    <li><span class="bugid">Bugfix:</span> Don't display track number zero.</li>
    <li><span class="bugid">Tech:</span> Faster start-up on Windows. Extract war file to SUBSONIC_HOME/jetty instead of
        temp directory.
    </li>
    <li><span class="bugid">Tech:</span> Made it possible to run the Jetty version on Linux and other platforms.</li>
    <li><span class="bugid">Tech:</span> Allow up to one week of idle time in Jetty.</li>
</ul>


<a name="3.3"/>
<h2 class="div">Subsonic 3.3 - Dec 23, 2007</h2>
<ul>
    <li><span class="bugid">New:</span> Added "HD-720" and "Barents Sea" themes.</li>
    <li><span class="bugid">New:</span> Improved layout of left and main frame.</li>
    <li><span class="bugid">New:</span> Sort genres in "Edit tags".</li>
    <li><span class="bugid">Bugfix:</span> Make transcoding work when combined with client-side playlist.</li>
    <li><span class="bugid">Bugfix:</span> Case-insensitive sorting of artists.</li>
    <li><span class="bugid">Bugfix:</span> Made genre parsing more robust.</li>
    <li><span class="bugid">Tech:</span> Upgraded to Acegi 1.0.5</li>
    <li><span class="bugid">Tech:</span> Upgraded to Spring 2.5</li>
    <li><span class="bugid">Tech:</span> Make it compile with Java 5.</li>
</ul>


<a name="3.3.beta1"/>
<h2 class="div">Subsonic 3.3.beta1 - Nov 23, 2007</h2>
<ul>
    <li><span class="bugid">New:</span> Implemented client-side playlists, including random skipping within songs
        (see <em>Settings &gt; Players &gt; Playlist is managed by player</em>).
    </li>
    <li><span class="bugid">New:</span> Support resumable downloads.</li>
    <li><span class="bugid">New:</span> Rewrite stream URL if Subsonic is behind a proxy.</li>
    <li><span class="bugid">New:</span> Added two new themes designed for large HD screens.</li>
    <li><span class="bugid">New:</span> Added Russian translation by Iaroslav Andrusiak.</li>
    <li><span class="bugid">New:</span> Made it possible to collapse/expand Podcast episodes. Improved layout and
        usability.
    </li>
    <li><span class="bugid">New:</span> Added "Play on phone" option to wap interface.</li>
    <li><span class="bugid">New:</span> Auto-focus on username field in login page.</li>
    <li><span class="bugid">New:</span> Created new settings categories "Advanced" and "Personal".</li>
    <li><span class="bugid">New:</span> Moved index from top to left frame.</li>
    <li><span class="bugid">Bugfix:</span> Support Podcast folder that is located outside music folder.</li>
    <li><span class="bugid">Bugfix:</span> Handle track number on the form "3/12"</li>
    <li><span class="bugid">Bugfix:</span> Fixed concurrency bug when rendering wiki markup.</li>
</ul>


<a name="3.2"/>
<h2 class="div">Subsonic 3.2 - Oct 09, 2007</h2>
<ul>
    <li><span class="bugid">New:</span> Added support for editing genre in ID3 tags.</li>
    <li><span class="bugid">New:</span> Show miniature album images in "Now playing" sidebar.</li>
    <li><span class="bugid">Bugfix:</span> Handle podcasts with colons in the name.</li>
    <li><span class="bugid">Bugfix:</span> Handle podcasts without enclosures.</li>
    <li><span class="bugid">Bugfix:</span> Handle song, album and artist names with special characters (&lt;, &gt; etc)
    </li>
</ul>


<a name="3.2.beta1"/>
<h2 class="div">Subsonic 3.2.beta1 - Sep 19, 2007</h2>
<ul>
    <li><span class="bugid">New:</span> Download Podcasts with the new integrated Podcast receiver.</li>
    <li><span class="bugid">New:</span> One-click installation with the new Windows installer.</li>
    <li><span class="bugid">New:</span> Fetch lyrics automatically from www.metrolyrics.com.</li>
    <li><span class="bugid">New:</span> See what others are playing in the new "Now playing" sidebar.</li>
    <li><span class="bugid">New:</span> Play music directly in the browser with the new integrated Flash-based player.
    </li>
    <li><span class="bugid">New:</span> New tag engine (entagged.sourceforge.net) supports tags in a lot of formats
        (mp3, ogg, flac, wav, wma,
        etc).
    </li>
    <li><span class="bugid">New:</span> Added confirmation dialog when deleting playlists.</li>
    <li><span class="bugid">New:</span> Remember selected music folder (in left frame) across sessions.</li>
    <li><span class="bugid">Bugfix:</span> Fixed bug with rendering multiple status charts concurrently.</li>
    <li><span class="bugid">Tech:</span> Added db admin tool.</li>
</ul>


<a name="3.1"/>
<h2 class="div">Subsonic 3.1 - Jul 30, 2007</h2>

<p>(No changes since 3.1.beta2)</p>


<a name="3.1.beta2"/>
<h2 class="div">Subsonic 3.1.beta2 - Jul 23, 2007</h2>
<ul>
    <li><span class="bugid">New:</span> Optimized scanning of music folders. Dramatic improvement for network disks.
    </li>
    <li><span class="bugid">Bugfix:</span> Fixed minor concurrency bug in search index creation.</li>
    <li><span class="bugid">Bugfix:</span> Make cache work if clocks on remote disks are out of sync.</li>
    <li><span class="bugid">Bugfix:</span> Ensure that cover art images are ordered alphabetically.</li>
    <li><span class="bugid">Bugfix:</span> Remove nag message for licensed users.</li>
</ul>


<a name="3.1.beta1"/>
<h2 class="div">Subsonic 3.1.beta1 - Jun 30, 2007</h2>
<ul>
    <li><span class="bugid">New:</span> Added checkboxes to songs in playlist, with option to perform operations on all
        selected songs.
    </li>
    <li><span class="bugid">New:</span> Now possible to specify genre and decade when generating random playlist.</li>
    <li><span class="bugid">New:</span> Added menu option to sort playlist by track, album or artist.</li>
    <li><span class="bugid">New:</span> Audioscrobbling is now more fault-tolerant. Will retry if Last.fm is down.</li>
    <li><span class="bugid">New:</span> Replaced Google ads with a donation request message. Donors will not see the
        message.
    </li>
    <li><span class="bugid">New:</span> Added new attribute "default" to transcodings. When "default" is true, the
        transcoding is automatically activated for new players.
    </li>
    <li><span class="bugid">New:</span> Implemented support for browser caching of left frame (with artist list).</li>
    <li><span class="bugid">New:</span> Made downsampling command configurable.</li>
    <li><span class="bugid">New:</span> Switch to "Now playing" after 3 minutes of inactivity.</li>
    <li><span class="bugid">New:</span> Album page now has link to artist.</li>
    <li><span class="bugid">Bugfix:</span> Logically delete/undelete metadata for albums that disappear/reappear on
        disk.
    </li>
    <li><span class="bugid">Bugfix:</span> Fixed ugly checkboxes in IE.</li>
</ul>


<a name="3.0"/>
<h2 class="div">Subsonic 3.0 - Mar 22, 2007</h2>
<ul>
    <li><span class="bugid">New:</span> Added Google ads.</li>
    <li><span class="bugid">Tech:</span> Upgraded <a href="http://code.google.com/p/jvorbiscomment/">jvorbiscomment</a>
        library.
    </li>
    <li><span class="bugid">Bugfix:</span> Artists from different music folders are now properly sorted.</li>
</ul>


<a name="3.0.beta2"/>
<h2 class="div">Subsonic 3.0.beta2 - Feb 24, 2007</h2>
<ul>
    <li><span class="bugid">New:</span> Added per-user bitrate limit.</li>
    <li><span class="bugid">New:</span> Show error message in browser if Subsonic home can't be created.</li>
    <li><span class="bugid">Bugfix:</span> Fixed remaining bugs (hopefully) related to folders with non-latin
        characters.
    </li>
    <li><span class="bugid">Bugfix:</span> Zooming of ID3 cover art now works.</li>
    <li><span class="bugid">Bugfix:</span> last.fm password must no longer be entered every time.</li>
</ul>


<a name="3.0.beta1"/>
<h2 class="div">Subsonic 3.0.beta1 - Feb 04, 2007</h2>
<ul>
    <li><span class="bugid">New:</span> Audioscrobbling support. Automatically register what you're playing on last.fm.
    </li>
    <li><span class="bugid">New:</span> Support display and editing of OGG Vorbis tags.</li>
    <li><span class="bugid">New:</span> Display cover art embedded in ID3 tags.</li>
    <li><span class="bugid">New:</span> Dutch translation by Ronald Knot.</li>
    <li><span class="bugid">New:</span> Links to previous/next album by same artist.</li>
    <li><span class="bugid">New:</span> Change tab order in login screen.</li>
    <li><span class="bugid">Bugfix:</span> Support directory names with non-latin characters.</li>
    <li><span class="bugid">Bugfix:</span> Fixed ampersand bug in wap interface.</li>
    <li><span class="bugid">Bugfix:</span> Display hours for very long tracks.</li>
    <li><span class="bugid">Tech:</span> Upgraded Spring and Acegi to latest versions.</li>
</ul>


<a name="2.9"/>
<h2 class="div">Subsonic 2.9 - Nov 13, 2006</h2>
<ul>
    <li><span class="bugid">New:</span> Added German translation by Harald Weiss.</li>
    <li><span class="bugid">New:</span> Show server version and memory usage in help page.</li>
    <li><span class="bugid">Bugfix:</span> Don't hang if unable to resolve latest version number.</li>
    <li><span class="bugid">Bugfix:</span> Avoid duplicates in random album page.</li>
    <li><span class="bugid">Bugfix:</span> More robust ID3 parsing.</li>
    <li><span class="bugid">Bugfix:</span> More robust thumbnail scaling.</li>
    <li><span class="bugid">Bugfix:</span> Fixed bug which in some cases made it impossible to restart streams.</li>
    <li><span class="bugid">Bugfix:</span> Improve track number removal from title.</li>
</ul>


<a name="2.9.beta1"/>
<h2 class="div">Subsonic 2.9.beta1 - Oct 16, 2006</h2>
<ul>
    <li><span class="bugid">Bugfix:</span> Avoid excessive disk and memory usage when (re)scanning the music library
        (bug introduced in 2.8).
    </li>
    <li><span class="bugid">Bugfix:</span> Avoid flickering PNG images in IE.</li>
    <li><span class="bugid">New:</span> Improved thumbnail quality using step-wise bilinear resampling.</li>
    <li><span class="bugid">New:</span> Thumbnails are now cached in SUBSONIC_HOME/thumbs. Expect significant speed-ups
        (after a while), in particular for huge images.
    </li>
    <li><span class="bugid">New:</span> Improved search speed by a factor of two.</li>
    <li><span class="bugid">New:</span> Miscellaneous other caching mechanisms for faster response times.</li>
    <li><span class="bugid">New:</span> Support Wiki markup in album comments.</li>
    <li><span class="bugid">New:</span> Added "Download" menu option to main album view.</li>
    <li><span class="bugid">New:</span> Ratings are now per-user. Average rating is also displayed.</li>
    <li><span class="bugid">New:</span> Now possible to delete rating (for current user).</li>
    <li><span class="bugid">New:</span> Added Spanish translation by Jorge Bueno Magdalena. Gracias, Jorge!</li>
    <li><span class="bugid">New:</span> New Subsonic logo.</li>
    <li><span class="bugid">New:</span> Keep bitrate statistics even if player reconnects.</li>
    <li><span class="bugid">New:</span> Support editing of track numbers in ID3 tags.</li>
    <li><span class="bugid">New:</span> Show full file name as tool tip in ID3 tag editor.</li>
    <li><span class="bugid">New:</span> Search results are now better sorted.</li>
</ul>


<a name="2.8"/>
<h2 class="div">Subsonic 2.8 - Sep 07, 2006</h2>
<ul>
    <li><span class="bugid">New:</span> Added option for transcoders to obey the player max bitrate setting.</li>
    <li><span class="bugid">New:</span> Sort songs by track number.</li>
    <li><span class="bugid">New:</span> Added transcoding support for Shorten and WavPack.</li>
    <li><span class="bugid">New:</span> Improved caching of cover art images in browser.</li>
    <li><span class="bugid">New:</span> Scroller color in Sandstorm theme.</li>
    <li><span class="bugid">New:</span> Updated Norwegian translation.</li>
    <li><span class="bugid">New:</span> Added Simplified Chinese translation by Neil Gao (currently incomplete).</li>
    <li><span class="bugid">Bugfix:</span> Fixed performance problem with "Home" page.</li>
    <li><span class="bugid">Bugfix:</span> Fixed broken wap interface.</li>
    <li><span class="bugid">Bugfix:</span> Fixed playlist autoscroll.</li>
    <li><span class="bugid">Bugfix:</span> Proper rendering of directories with both files and sub-directories.</li>
</ul>


<a name="2.8.beta1"/>
<h2 class="div">Subsonic 2.8.beta1 - Aug 13, 2006</h2>
<ul>
    <li><span class="bugid">New:</span> Transcoding plugin framework.</li>
    <li><span class="bugid">New:</span> VBR (variable bitrate) detection and resampling.</li>
    <li><span class="bugid">New:</span> Added form-based login with remember-me.</li>
    <li><span class="bugid">New:</span> Added logout option.</li>
    <li><span class="bugid">New:</span> Support per-user language and theme.</li>
    <li><span class="bugid">New:</span> Show track number, genre, format, duration and file size.</li>
    <li><span class="bugid">New:</span> Configurable level of song details.</li>
    <li><span class="bugid">New:</span> Various artists detection.</li>
    <li><span class="bugid">New:</span> Added option to stream over plain HTTP when using SSL.</li>
    <li><span class="bugid">New:</span> Mouseover tooltip for truncated text and cover art images.</li>
    <li><span class="bugid">New:</span> Optional notification of new final and beta releases.</li>
    <li><span class="bugid">New:</span> Nicer error page.</li>
    <li><span class="bugid">New:</span> Added "Back in black" and "Sandstorm" themes.</li>
    <li><span class="bugid">New:</span> Exclude files and folders listed in "subsonic_exclude.txt"</li>
    <li><span class="bugid">Tech:</span> New security implementation based on Acegi (http://acegisecurity.org/)</li>
    <li><span class="bugid">Tech:</span> Springified WAP pages and servlets.</li>
    <li><span class="bugid">Tech:</span> Springified DWR.</li>
    <li><span class="bugid">Tech:</span> Springified DAO's and data source.</li>
</ul>

<a name="2.7"/>
<h2 class="div">Subsonic 2.7 - Jun 12, 2006</h2>
<ul>
    <li><span class="bugid">Tech:</span> Subsonic was completely rewritten to use the Spring MVC framework.</li>
    <li><span class="bugid">New:</span> Theme support. Now ships with two themes, "Subsonic Default" and "2 minutes to
        midnight". Theme authors are encouraged to contribute.
    </li>
    <li><span class="bugid">New:</span> Ajax-based ID3 tag editor.</li>
    <li><span class="bugid">New:</span> Cover art 3D effect and popup. (3D effect not available in Internet Explorer).
    </li>
    <li><span class="bugid">New:</span> Added options to limit bandwidth for downloads and uploads.</li>
    <li><span class="bugid">New:</span> Added progress bar to upload page.</li>
    <li><span class="bugid">New:</span> Show upload (as well as download and streaming) charts in status page.</li>
    <li><span class="bugid">New:</span> Added option to configure shortcuts to certain folders.</li>
    <li><span class="bugid">New:</span> Rating where you can see how much each user has uploaded/downloaded/streamed.
    </li>
    <li><span class="bugid">New:</span> Nicer layout and graphics.</li>
    <li><span class="bugid">New:</span> Added option to download playlists, both current and previously saved ones.</li>
    <li><span class="bugid">New:</span> Now logs to c:/subsonic/subsonic.log (Windows) or /var/subsonic/subsonic.log
        (other platforms).
    </li>
    <li><span class="bugid">New:</span> Support symbolic links on Unix.</li>
    <li><span class="bugid">New:</span> Support XSPF playlist format.</li>
    <li><span class="bugid">New:</span> Create backup of old image file when changing cover art.</li>
    <li><span class="bugid">Bugfix:</span> Avoid wrapped lines if browser window is small.</li>
    <li><span class="bugid">Bugfix:</span> Use proper Y-range in bandwidth charts.</li>
    <li><span class="bugid">Bugfix:</span> Integer overflow in search index creation interval.</li>
    <li><span class="bugid">Bugfix:</span> Some Amazon search didn't show any results.</li>
    <li><span class="bugid">Bugfix:</span> Now possible to change cover art even if original file is write protected
        (Windows only).
    </li>
</ul>


<a name="2.6"/>
<h2 class="div">Subsonic 2.6 - Mar 10, 2006</h2>
<ul>
    <li><span class="bugid">New:</span> Nicer layout, colors and icons. Customizable welcome message. Option to limit
        number of cover art images to display.
    </li>
    <li><span class="bugid">New:</span> You can now specify multiple media folders in the configuration.
        This is useful, for example, if you have your music on multiple disks, or if you have one
        directory with music, and another with movies. The index (on the left-hand side) can either show all
        media folders (merged alphabetically), or you can select from a combo box which folder to display.
    </li>
    <li><span class="bugid">New:</span> Assign ratings (one to five stars) and comments to individual albums.</li>
    <li><span class="bugid">New:</span> There is a new welcome page, displaying lists of random albums, newest albums,
        highest rated albums, most often played albums and most recently played albums.
    </li>
    <li><span class="bugid">New:</span> You can configure a set of links to Internet TV and radio stations. These links
        become available in the index on the left-hand side. Click on a link, and your player connects to the station.
    </li>
    <li><span class="bugid">New:</span> Saved playlists are now available as Podcasts (available from the "More" page).
    </li>
    <li><span class="bugid">New:</span> Improved player management. Support multiple players with the same IP address,
        and players with dynamic IP addresses. Display player type (e.g., WinAmp) and last-seen date.
    </li>
    <li><span class="bugid">New:</span> Macedonian translation by Stefan Ivanovski.</li>
    <li><span class="bugid">New:</span> Implemented support for non-Latin character encodings (for instance Japanese or
        Cyrillic).
    </li>
    <li><span class="bugid">New:</span> Added option to load a previously saved playlist in the WAP interface.</li>
    <li><span class="bugid">New:</span> "Album Info" now integrates with Google Music.</li>
    <li><span class="bugid">New:</span> Avoid unnecessary reloading of the playlist window.</li>
    <li><span class="bugid">Bugfix:</span> Fallback to file name if ID3 tags are present but empty.</li>
    <li><span class="bugid">Bugfix:</span> LAME now works on Linux.</li>
    <li><span class="bugid">Bugfix:</span> Solved problem with playlist autoscroll on rearrange.</li>
    <li><span class="bugid">Bugfix:</span> Clicking index in top frame sometimes caused reloading of left frame.</li>
</ul>

<a name="2.5"/>
<h2 class="div">Subsonic 2.5 - Nov 25, 2005</h2>
<ul>
    <li><span class="bugid">New:</span> Implemented user management. Users are easily created, deleted and assigned
        different privileges.
    </li>
    <li><span class="bugid">New:</span> Faster song switching. Players react immediately to playlist changes.</li>
    <li><span class="bugid">New:</span> Now possible to refine search for cover art and album info.</li>
    <li><span class="bugid">New:</span> Better support for OGG, AAC and other formats. Added proper suffix to stream URL
        as a hint to the player. </li>
    <li><span class="bugid">New:</span> Display media library statistics.</li>
    <li><span class="bugid">New:</span> New location for preferences, search index and database (c:\subsonic or
        /var/subsonic).
    </li>
    <li><span class="bugid">Bugfix:</span> Improved parsing of MP3 tags. Avoid funny characters in artist, album and
        song title.
    </li>
</ul>


<a name="2.4"/>
<h2 class="div">Subsonic 2.4 - Oct 10, 2005</h2>
<ul>
    <li><span class="bugid">New:</span> Download cover art and album info from Amazon web service.</li>
    <li><span class="bugid">New:</span> Show selection of random albums on welcome page.</li>
    <li><span class="bugid">New:</span> Display notice if LAME is not installed.</li>
    <li><span class="bugid">Bugfix:</span> Allow max one stream per player.</li>
    <li><span class="bugid">Bugfix:</span> Use user-wide (not system-wide) preferences on non-Windows platforms.</li>
</ul>


<a name="2.3"/>
<h2 class="div">Subsonic 2.3 - May 28, 2005</h2>
<ul>
    <li><span class="bugid">New:</span> Full internationalization support.</li>
    <li><span class="bugid">New:</span> Automatic update of search index at specified intervals.</li>
    <li><span class="bugid">New:</span> Search is now more like Google.</li>
    <li><span class="bugid">New:</span> Updating search index is now a lot faster (30 seconds for 18000 songs).</li>
    <li><span class="bugid">New:</span> Unique playlist "undo" function.</li>
    <li><span class="bugid">New:</span> "Now Playing" automatically refreshes when a new album is played.</li>
    <li><span class="bugid">New:</span> Ongoing downloads are now displayed in the status page, with charts showing
        download speed.
    </li>
    <li><span class="bugid">New:</span> Some improvements in zip functionality.</li>
    <li><span class="bugid">New:</span> Significantly improved accuracy in charts.</li>
    <li><span class="bugid">New:</span> Better support for non-ASCII characters in SHOUTcast.</li>
    <li><span class="bugid">New:</span> No longer necessary to enter username and password in player.</li>
    <li><span class="bugid">New:</span> Support for "ignored articles".</li>
    <li><span class="bugid">New:</span> Show log in help page.</li>
</ul>


<a name="2.2"/>
<h2 class="div">Subsonic 2.2 - March 17, 2005</h2>
<ul>
    <li><span class="bugid">New:</span> Implemented SHOUTcast support.</li>
    <li><span class="bugid">New:</span> Added "Album info" which links to reviews etc at allmusic.com.</li>
    <li><span class="bugid">New:</span> Support for uploading files from the browser to the Subsonic server. Zip-files
        are automatically unpacked.
    </li>
    <li><span class="bugid">New:</span> Improved usability in search interface.</li>
    <li><span class="bugid">New:</span> Option to specify http://yourhostname/stream/file.ogg etc.</li>
    <li><span class="bugid">Bugfix:</span> Detect zero-terminated strings in ID3 tags.</li>
    <li><span class="bugid">Bugfix:</span> Use ID3v2 tags instead of ID3v1, if both are present.</li>
</ul>

<a name="2.1"/>
<h2 class="div">Subsonic 2.1 - March 8, 2005</h2>
<ul>
    <li><span class="bugid">New:</span> Added more search options.</li>
    <li><span class="bugid">New:</span> Added support for downloading an entire directory structure as a zip file.</li>
    <li><span class="bugid">New:</span> Subsonic now parses song titles, artists and albums from ID3 tags.</li>
    <li><span class="bugid">New:</span> Settings for cover art size and max bitrate can now be set for individual
        players.
    </li>
    <li><span class="bugid">New:</span> Search index is now generated in the background.</li>
    <li><span class="bugid">New:</span> Keep position in playlist frame (e.g., always show the currently playing track).
    </li>
    <li><span class="bugid">Bugfix:</span> Some minor bug fixes.</li>
</ul>

<a name="2.0"/>
<h2 class="div">Subsonic 2.0 - February 27, 2005</h2>
<ul>
    <li><span class="bugid">New:</span> Added WAP interface for controlling Subsonic from a mobile phone or PDA.</li>
    <li><span class="bugid">New:</span> Added option to generate a random playlist.</li>
    <li><span class="bugid">New:</span> Added option to download and save individual songs.</li>
    <li><span class="bugid">New:</span> Subsonic now alerts users if a new version is available.</li>
    <li><span class="bugid">New:</span> Improved documentation and usability.</li>
    <li><span class="bugid">New:</span> ANT support.</li>
</ul>

<a name="1.0"/>
<h2 class="div">Subsonic 1.0 - February 10, 2005</h2>
<ul>
    <li><span class="bugid">New:</span> Added chart for displaying bitrates last few minutes.</li>
    <li><span class="bugid">New:</span> Implemented transcoding to lower bitrates.</li>
    <li><span class="bugid">New:</span> Added online help.</li>
    <li><span class="bugid">New:</span> Support PLS and M3U playlists.</li>
</ul>


<h2 class="div">Subsonic 0.1 - December 14, 2004</h2>
<a name="0.1"/>
<ul>
    <li>Initial release.</li>
</ul>


</div>

<div id="side-col">

    <div class="sidebox">
        <h2>Releases</h2>
        <ul class="list">
            <li><a href="#3.5">Subsonic 3.5</a></li>
            <li><a href="#3.5.beta2">Subsonic 3.5.beta2</a></li>
            <li><a href="#3.5.beta1">Subsonic 3.5.beta1</a></li>
            <li><a href="#3.4">Subsonic 3.4</a></li>
            <li><a href="#3.4">Subsonic 3.4.beta1</a></li>
            <li><a href="#3.3">Subsonic 3.3</a></li>
            <li><a href="#3.3.beta1">Subsonic 3.3.beta1</a></li>
            <li><a href="#3.2">Subsonic 3.2</a></li>
            <li><a href="#3.2.beta1">Subsonic 3.2.beta1</a></li>
            <li><a href="#3.1">Subsonic 3.1</a></li>
            <li><a href="#3.1.beta2">Subsonic 3.1.beta2</a></li>
            <li><a href="#3.1.beta1">Subsonic 3.1.beta1</a></li>
            <li><a href="#3.0">Subsonic 3.0</a></li>
            <li><a href="#3.0.beta2">Subsonic 3.0.beta2</a></li>
            <li><a href="#3.0.beta1">Subsonic 3.0.beta1</a></li>
            <li><a href="#2.9">Subsonic 2.9</a></li>
            <li><a href="#2.9.beta1">Subsonic 2.9.beta1</a></li>
            <li><a href="#2.8">Subsonic 2.8</a></li>
            <li><a href="#2.8.beta1">Subsonic 2.8.beta1</a></li>
            <li><a href="#2.7">Subsonic 2.7</a></li>
            <li><a href="#2.6">Subsonic 2.6</a></li>
            <li><a href="#2.5">Subsonic 2.5</a></li>
            <li><a href="#2.4">Subsonic 2.4</a></li>
            <li><a href="#2.3">Subsonic 2.3</a></li>
            <li><a href="#2.2">Subsonic 2.2</a></li>
            <li><a href="#2.1">Subsonic 2.1</a></li>
            <li><a href="#2.0">Subsonic 2.0</a></li>
            <li><a href="#1.0">Subsonic 1.0</a></li>
            <li><a href="#0.1">Subsonic 0.1</a></li>
        </ul>
    </div>
</div>

<div class="clear">
</div>
</div>
<hr/>
<?php include("footer.php"); ?>
</div>


</body>
</html>