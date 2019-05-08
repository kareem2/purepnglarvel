<?php
/**
*
* @ This file is created by deZender.Net
* @ deZender (PHP5 Decoder for ionCube Encoder)
*
* @	Version			:	1.1.4.0
* @	Author			:	DeZender
* @	Release on		:	30.03.2012
* @	Official site	:	http://DeZender.Net
*
*/

	include( 'includes/config.php' );
	include( 'includes/theme.php' );
	include( 'blocks/mainblock.php' );
	include( 'includes/bbfunction.php' );
	include( 'arabicTools.class.php' );
	$cat = $_GET['cat'];
	$id = $_GET['id'];
	$page = $_GET['page'];

	if (( intval( $cat ) && !isset( $id ) )) {
		$cat = (int)$_GET['cat'];

		if (!( $query = mysql_query( '' . 'SELECT id ,name,description FROM newscat WHERE id=\'' . $cat . '\' limit 1' ))) {
			exit( mysql_error(  ) );
			(bool)true;
		}


		while ($result = mysql_fetch_array( $query )) {
			$hname = $result[name];
			$disc = $result[description];
		}


		if ($disc == '') {
			$disc = '‰ﬁÿ… ÷Ê¡';
		}

		$keyw = str_replace( ' ', ',', $disc );
		head( $hname, $disc, $keyw );
		top(  );

		if (!( $query = mysql_query( '' . 'SELECT id ,name ,description FROM newscat WHERE id=\'' . $cat . '\'' ))) {
			exit( mysql_error(  ) );
			(bool)true;
		}

		$numrows = mysql_num_rows( $query );

		if (empty( $numrows )) {
			echo '    <meta http-equiv="refresh" content="0; URL=index.php" />
<div class="msg" align="center">
 „ « »«⁄ —«»ÿ €Ì— ’ÕÌÕ ..!!
</div>
';
			foot(  );
			exit(  );
		}

		echo '





<div id="fb-root"></div>
      <div style="padding:0.2em;"></div>

       <div >

   <div align="right" style="height:20px; padding:0.1em;"><img src="images/hom.gif"  width="12" height="13" align="absmiddle" alt="«·—∆Ì”Ì…" border=0> <a  style="color:#000000; font-weight:normal; font-family:Tahoma; font-size:9pt;" href="index.php">«·—∆Ì”Ì… </a> <b>&raquo;</b> ';
		echo $hname;
		echo '  </div>

   <div> <div style="padding:0.1em;"></div>
 ';
		$counter = 0;

		if (!( $query2 = mysql_query( '' . 'SELECT  id ,topic ,subject ,writer  ,description ,stime ,counter ,pic  FROM articles  where topic=\'' . $cat . '\' ORDER BY id Desc LIMIT 1' ))) {
			exit( mysql_error(  ) );
			(bool)true;
		}


		while ($result = mysql_fetch_array( $query2 )) {
			$cat = $result[topic];
			++$counter;
			echo '
<div id="dog';
			echo $counter;
			echo '"  align=\'center\'>



      <div style="color:#000000; direction:ltr;">
 <table width="795" border="0" cellpadding="0" cellspacing="0"><tr>
<!--<td valign="top">

  ';
			echo '' . '<a class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
			echo '<img src="';
			echo $result[pic];
			echo '"  alt="';
			echo $result[subject];
			echo '"   width="260" height="180"  style="border:6px solid #ffffff;">
</a>

 </td> -->

 <td   valign="top" >





      <div style="background:#FABE3C; border:6px solid #DBDBDB; height:215px; padding:0.7em; text-align:right;">

     <br />';
	 echo '<div style="
    float: right;
    width: 480px;
    margin-left: 10px;
" >';
			echo '' . '<a  class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
			echo '' . $result[subject] . '';
			echo '</a>';
			$description = textcut( $result[description], 480 );
			echo '<p align=\'justify\' style=\'padding-top:0.3em; margin-top:0.3em; color:#000000; direction:rtl;\'>';
			echo $description . '...';
			echo '' . '<img src=\'images/more.png\' width=\'14\' height=\'15\' align=\'absmiddle\' alt=\'«· ›«’Ì·\'> <a  class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>«· ›«’Ì· </a></p>';
			

			if (!( $viewcom = mysql_query( '' . 'SELECT * FROM comments WHERE place=' . $result['id'] . ' and vis=\'1\' ORDER BY \'comid\'' ))) {
				exit( mysql_error(  ) );
				(bool)true;
			}
echo '</div>';
			$num_sql1 = mysql_num_rows( $viewcom );
			echo '<img src="';
			echo $result[pic];
			echo '"  alt="';
			echo $result[subject];
			echo '"   width="260" height="180"  style="border:6px solid #ffffff;">';
			echo '</div>';








echo '</td>

 </tr></table>
</div>
</div>
 ';
		}

		echo '






 </div>










<table  border="0" cellpadding="1" cellspacing="1"><tr>
<td valign="top">

     <div style="padding:0.5em;"></div>
';
		ban4681(  );
		echo '     <div style="padding:0.5em;"></div>




   ';

		if (!( $viewcomr = mysql_query( '' . 'SELECT  id ,topic ,subject  ,writer,description ,text,stime  ,picsm  FROM articles  where topic=\'' . $cat . '\' ORDER BY id DESC limit 1,10' ))) {
			exit( mysql_error(  ) );
			(bool)true;
		}

		$num_sql1 = mysql_num_rows( $viewcomr );
		$pages = ceil( $num_sql / 10 );
		$co = 0;
		echo '
 <table width="100%" border="0" cellpadding="0" cellspacing="0"><tr>';

		while ($result = mysql_fetch_array( $viewcomr )) {
			if ($result[id] == $noid) {
				continue;
			}

			++$counter;
			$cat = $result[topic];
			++$co;
			$times = date( 'h:m a', $result[stime] );
			$times = str_replace( 'pm', ' „”«¡«', $times );
			$times = str_replace( 'am', ' ’»«Õ«', $times );
			$result[stime] = ArabicTools::arabicdate( 'ar:l, d/F/Y', $result['stime'] );
			$result[stime] = str_replace( '/', '-', $result[stime] );
			$result[subject] = textcut( $result[subject], 50 );
			echo ' <td width="100%" valign="top" style="padding:0.0em; background:url(images/shade.gif ) repeat-x;">

     <div class="titblock2" style="text-align:right;" >
   &nbsp;';
			echo '' . '<a  class=\'alinks2\'  href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
			echo $result[subject] . '..</a>';
			echo '    <br />
 </div>


<div style=\' border:0px solid #E6E6E4; color:#000000;\'>




<div  style=\'height:100%; padding:0.4em;\'>
';
			echo '' . '<a class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
			echo '
';

			if ($result[picsm] == '') {
				echo '  <img src="images/unpic.gif"  alt="';
				echo $result[subject];
				echo '" vspace="5" hspace="5"  align="right"  width="130" height="100"  class="picnews2">
';
			} 
else {
				echo '<img src="';
				echo $result[picsm];
				echo '"  alt="';
				echo $result[subject];
				echo '" vspace="5" hspace="5"  align="right"  width="130" height="100"  class="picnews2">

';
			}

			echo '</a>

';
			$description = textcut( $result[description], 140 );
			echo '<p align=\'justify\' style=\' margin-top:0.0em; padding-top:0.0em; border:0px solid #E6E6E4; color:#000000;\'>';
			echo '' . ' <span><b style=\'font-size:9pt; color:#555555;\'></b> <span class=\'write0\'>' . $result['writer'] . '</span>
<br /><font style=\'font-size:7pt; color:#787878\'> ' . $result['stime'] . '</span> &nbsp; ' . $times . ' </font><br> ';
			echo $description . ( '' . '... <img src=\'images/more.png\' width=\'14\' height=\'15\' align=\'absmiddle\' alt=\'«· ›«’Ì·\'> <a  class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>«· ›«’Ì· </a>' );
			echo '</p>';
			echo '
';
			echo '</div><div style=\'padding:0.2em; margin:0.0em;\' ></div></td>';

			if ($co == 1) {
				echo '</tr><tr><td></td></tr><tr>';
				$co = 0;
				continue;
			}
		}

		echo '  </table>


 </td>

 <td>&nbsp;</td>

<td width="270" valign="top" >



      <div style="padding:0.2em;"></div>




   ';

		if (!( $viewcomr = mysql_query( '' . 'SELECT  id ,topic ,subject  ,writer,description ,stime  ,picsm  FROM articles   where topic=\'' . $cat . '\' ORDER BY id DESC limit 11,10' ))) {
			exit( mysql_error(  ) );
			(bool)true;
		}

		$num_sql1 = mysql_num_rows( $viewcomr );
		$pages = ceil( $num_sql / 10 );
		$co = 0;
		echo '
 <table width="100%" border="0" cellpadding="0" cellspacing="0"><tr>';

		while ($result = mysql_fetch_array( $viewcomr )) {
			if ($result[id] == $noid) {
				continue;
			}

			++$counter;
			$cat = $result[topic];
			++$co;
			$times = date( 'h:m a', $result[stime] );
			$times = str_replace( 'pm', ' „”«¡«', $times );
			$times = str_replace( 'am', ' ’»«Õ«', $times );
			$result[stime] = ArabicTools::arabicdate( 'ar:l, d/F/Y', $result['stime'] );
			$result[stime] = str_replace( '/', '-', $result[stime] );
			$result[subject] = textcut( $result[subject], 50 );
			echo ' <td width="100%" valign="top" style="padding:0.0em; background:url(images/shade.gif ) repeat-x;">

      <div class="hed3" style="text-align:right;" >
   &nbsp;';
			echo '' . '<a  class=\'alinks2\'  href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
			echo $result[subject] . '..</a>';
			echo '    <br />
 </div>


<div style=\' padding:0.3em; height:144px; background:#000000; border:0px solid #E6E6E4; color:#ffffff;\'>

<br>
';
			echo '' . '<a class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
			echo '
';

			if ($result[picsm] == '') {
				echo '  <img src="images/unpic.gif"  alt="';
				echo $result[subject];
				echo '" vspace="5" hspace="5"  align="right"  width="98" height="75  class="picnews2" style="border:3px solid #323232;">
';
			} 
else {
				echo '<img src="';
				echo $result[picsm];
				echo '"  alt="';
				echo $result[subject];
				echo '" vspace="5" hspace="5"  align="right"  width="98" height="75"  class="picnews2" style="border:3px solid #323232;">

';
			}

			echo '</a>

';
			$description = textcut( $result[description], 75 );
			echo '<p  style=\' margin-top:0.0em; padding-top:0.0em; border:0px solid #E6E6E4; color:#ffffff;\'>';
			echo $description . ( '' . '... <img src=\'images/more.png\' width=\'14\' height=\'15\' align=\'absmiddle\' alt=\'«· ›«’Ì·\'> <a  class=\'alinks03\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>«· ›«’Ì· </a>' );
			echo '</p>';
			echo '
';
			echo '</div><div style=\'padding:0.2em; margin:0.0em;\' ></div></td>';

			if ($co == 1) {
				echo '</tr><tr><td></td></tr><tr>';
				$co = 0;
				continue;
			}
		}

		echo '  </table>


</td>






 </tr></table>

';
	} 
else {
		if (( intval( $cat ) && intval( $id ) )) {
			$id = (int)$_GET['id'];

			if (!( $query = mysql_query( '' . 'SELECT id ,subject,description, pic FROM articles WHERE id=\'' . $id . '\' limit 1' ))) {
				exit( mysql_error(  ) );
				(bool)true;
			}

 
			while ($result = mysql_fetch_array( $query )) {
				$hname = $result[subject];
				$disc = $result[description];
				$disc = textcut( $disc, 140 );
				$pic = $result[pic];
			}

			$keyw = str_replace( ' ', ',', $hname );
			head( $hname, $disc, $keyw, $pic, $cat, $id );
			top(  );

			if (!( $querypart = mysql_query( '' . 'SELECT id ,name FROM newscat WHERE id=\'' . $cat . '\'' ))) {
				exit( mysql_error(  ) );
				(bool)true;
			}

			$numrows = mysql_num_rows( $querypart );

			if (empty( $numrows )) {
				echo '     <meta http-equiv="refresh" content="0; URL=articles.php" />
<div class="msg" align="center">
 „ « »«⁄ —«»ÿ €Ì— ’ÕÌÕ ..!!
</div>
';
				bottom(  );
				foot(  );
				exit(  );
			}


			while ($reseltpart = mysql_fetch_array( $querypart )) {
				$part = $reseltpart[name];
				$partid = $reseltpart[id];
			}


			if (!( mysql_query( '' . 'UPDATE articles SET counter=counter+1 WHERE id=\'' . $id . '\'' ))) {
				exit( mysql_error(  ) );
				(bool)true;
			}


			if (!( $query = mysql_query( '' . 'SELECT * FROM articles WHERE id=\'' . $id . '\' ' ))) {
				exit( mysql_error(  ) );
				(bool)true;
			}

			$numrows2 = mysql_num_rows( $query );

			if (empty( $numrows2 )) {
				echo '<meta http-equiv="refresh" content="0; URL=index.php" />
<div class="msg" align="center">
 „ ≈Œ Ì«— „ﬁ«· »‘ﬂ· €Ì— ”·Ì„ ..!! ·ÿ›« ≈‰ Ÿ— ﬁ·Ì·«
</div>
';
				bottom(  );
				foot(  );
				exit(  );
			}


			while ($result = mysql_fetch_array( $query )) {
				$nid = $result[id];
				$comm = $result[comm];

				if ($result[pic] == '') {
					$result[pic] = $result[picsm];
				}

				$pic = substr( $result[pic], 0, 11 );
				$pic2 = substr( $result[pic], 0, 12 );
				$pic3 = substr( $result[pic], 0, 4 );

				if (( ( ( $pic != '../imagebg/' && $pic2 != '../imagebig/' ) && $pic != '' ) && $pic3 != 'http' )) {
					$result[pic] = '' . $siteurl . '/images/news/' . $result['picsm'];
				}

				$times = date( 'h:m a', $result[stime] );
				$times = str_replace( 'pm', ' „”«¡«', $times );
				$times = str_replace( 'am', ' ’»«Õ«', $times );
				$result[stime] = ArabicTools::arabicdate( 'ar:l, d/F/Y', $result['stime'] );
				$result[stime] = str_replace( '/', '-', $result[stime] );
				echo '







<table border="0" cellpadding="0" cellspacing="0" align="center"  >
<tr>
<td    style="padding:0.0em; padding-top:0.0em; color:#000000; font-size:10pt;"   valign="top">

     


       <div >

   <div align="right" style="height:20px; padding:0.1em;"><img src="images/hom.gif"  width="12" height="13" align="absmiddle" alt="«·—∆Ì”Ì…" border=0> <a  style="color:#000000; font-weight:';
				echo 'normal; font-family:Tahoma; font-size:9pt;" href="index.php">«·—∆Ì”Ì… </a> <b>&raquo;</b> <a style="color:#000000; font-weight:normal; font-family:Tahoma; font-size:9pt;" href="';
				echo '' . 'articles.php?cat=' . $result['topic'] . '&page=1 ';
				echo '"> ';
				echo $part;
				echo '</a>  <b>&raquo;</b> ';
				echo $hname;
				echo ' </div>

   <div> <div style="padding:0.1em;"></div>
<br>
';
				ban4681(  );
				echo '<br>

<div style="text-align:right;">
';
				echo '' . '<h1 style=\'color:#000000; font-family:"Traditional Arabic" , "Arabic Transparent" ; font-size: 23px;\'> <img src=\'images/rfeed.png\' width=\'24\' height=\'24\' align=\'absmiddle\' alt=\'' . $result['subject'] . '\' border=0> ' . $result[subject] . '</h1>';
				echo '<b style=\'color:#4E4E4E; font-family:\"Traditional Arabic\" , \"Arabic Transparent\" ; font-size: 18px;\'> ';
				echo $result[writer];
				echo ' (';
				echo $result[resource];
				echo ')  </b>
';
				echo '' . '<font style=\'font-size:7pt; color:#787878\'> ' . $result['stime'] . '</span> &nbsp; ' . $times . ' </font>';
				echo '

  <p align="justify" style=\'color:#000000; font-family:\"Traditional Arabic\" , \"Arabic Transparent\" ; line-height:27px; font-size: 22px;\'>

 ';

				if ($result[pic] == '') {
				} 
else {
					echo '<table align="center" cellpadding="5" cellspcing="9"  ><tr><td >

      <div style="background: #ffffff url(images/shade2.gif ) repeat-x; padding:0.6em;">

<table align="center" cellpadding="2" cellspcing="8" ><tr><td align="center">
<div><img src="';
					echo $result[pic];
					echo '"  alt="';
					echo $result[subject];
					echo '"  style="max-width:540px;" align="center" ></div>
</td></tr><tr><td ><p align="justify" style="font-size:8pt; font-weight:bold; color:#B0B0B1; ">

';

					if ($result[caption] != '') {
						echo '
<img src="images/question.gif" width="21" height="24" alt="';
						echo $result[caption];
						echo '" border=0 align="absmiddle"> ';
						echo $result[caption];
					}

					echo '</p></td>

 </tr></table>';
					echo '
</div>



 ';
					echo '</td></tr></table>';
				}

				//echo '<span class=\'st_facebook_hcount\' displayText=\'Facebook\'></span>';
				
				echo '<div class="fb-like" data-href="'.$siteurl.'/articles.php?cat='.$cat.'&id='.$id.'" 
				data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>';

				echo '<div class="g-plus" data-action="share" data-annotation="bubble" data-href="'.$siteurl.'/articles.php?cat='.$cat.'&id='.$id.'"></div>';

				echo '<iframe id="twitter-widget-0" 
				scrolling="no" 
				frameborder="0" 
				allowtransparency="true" 
				class="twitter-share-button 
				twitter-share-button-rendered 
				twitter-tweet-button" 
				title="Twitter Tweet Button" 
				src="https://platform.twitter.com/widgets/tweet_button.39f7ee9fffbd122b7a37a520dbdaebc6.en.html#dnt=false
				&id=twitter-widget-0
				&lang=en
				&size=m
				&text='.$hname.'&type=share&url='.$siteurl.'/articles.php?cat='.$cat.'&id='.$id.'" 
				style="position: static; 
				visibility: visible; 
				width: 63px; 
				height: 20px;" 
				 data-url="'.$siteurl.'/articles.php?cat='.$cat.'&id='.$id.'">
				</iframe>
				
				
				
				<div style="
					display: inline-block;
					vertical-align: top;
				"><a class="" target="_blank" href="print.php?id='.$id.'" style="
					background: #4267b2;
					color: white;
					/* padding: 8px; */
					font-size: 17px;
					padding-left: 10px;
					padding-right: 10px;
					display: inline-block;
					border-radius: 5px;
				">
								ÿ»«⁄…
								</a>
				</div>				
				
				
				';
				
/*
				echo '<span class=\'st_googleplus_hcount\' displayText=\'Google +\'></span>
				<span class=\'st_twitter_hcount\' displayText=\'Tweet\'></span>
				<span class=\'st_linkedin_hcount\' displayText=\'LinkedIn\'></span>';*/


				$result[text] = str_replace( 'DIV', 'p', $result[text] );
				$result[text] = str_replace( '<P', '<P style=\'color:#000000; font-family: Arabic Transparent, "Arabic Transparent" ; line-height:30px; font-size: 18px; \' align=justify ', $result[text] );
				$result[text] = str_replace( '<p', '<P style=\'color:#000000; font-family: Arabic Transparent, "Arabic Transparent" ; line-height:30px; font-size: 18px; \' align=justify ', $result[text] );
				echo $result[text];
				echo '

 &nbsp; &nbsp;

 <br><br>







  <a name="comm"></a>
   <div style="padding:0.2em;"></div>

<div class="titblock2" >
';
				echo '' . '<img src=\'images/comm.gif\' width=\'23\' height=\'30\' align=\'absmiddle\' alt=\'' . $result['subject'] . '\' border=0> «÷«›…  ⁄·Ìﬁ';
				echo '
</div>





<div id="fb-root"></div>
';
				echo '<s';
				echo 'cript>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>


<div class="fb-comments" data-href="http://www.n-dawa.com/articles.php?cat=';
				echo $cat;
				echo '&id=';
				echo $id;
				echo '" data-width="100%" data-numposts="5" data-colorscheme="light"></div>




<table border="0" cellpadding="0" cellspacing="0" align="center"  >
<tr>
<td>
  <div name="comm" class="block" style="background:url(images/shade2.gif ) repeat-x; padding:0.9em; ">
<div class="done"><br />
<b>‘ﬂ—« ·ﬂ ..!</b> ”Ê› Ì „ ⁄—÷ «· ⁄·Ìﬁ »⁄œ «· œﬁÌﬁ ⁄·ÌÂ „‰ ﬁ»· «·„Õ—— .<br />
</div>
        <div style="width:450px;';
				echo '" class="form">
        <div id="note"></div>
        <form method="post" action="process.php">
        <div class="elements">
                <label>«·«”„</label>
                <input type="text" name="namet" class="text2" />
                <input type="hidden" name="p" value="';
				echo $id;
				echo '" class="text2" />
        </div>
                <div class="elements">
                <label>«·»—Ìœ «·«·ﬂ —Ê‰Ì </label>
                <input type="text" name="emailt" class="text2" />
        </div>

        <div class="elements">
                <label>⁄‰Ê«‰ «· ⁄·Ìﬁ</label>
                <input type="text" name="commtit" class="text" />
        </div>
        <div class="elements">
           ';
				echo '     <label>—„“ «· √ﬂÌœ :</label>
                <input type="text" name="codea" class="text" />
				<input type="text" name="typc" class="text" value="news" hidden/>
        </div>
        <div class="element">
                <label></label>
                <img src=\'captcha.php\' />
        </div>
        <div class="element">
                <label>‰’ «· ⁄·Ìﬁ </label>
                <textarea name="comment" class="text textarea"  /></textarea>
        </div>
      ';
				echo '  <div class="element">

                <input type="submit" id="submit" value="«—”· «· ⁄·Ìﬁ"/>
                <div class="loading"></div>
        </div>
        </form>
        </div>
</div>

<div class="clear"></div>
     </td></tr></table> 








';

				if (!isset( $page )) {
					$page = 1;
				} 
else {
					$page = $_GET['page'];
				}


				if (!( $numresults = mysql_query( '' . 'SELECT comid FROM comments WHERE place=\'' . $id . '\' and vis=\'1\'' ))) {
					exit( mysql_error(  ) );
					(bool)true;
				}

				$numrows = mysql_num_rows( $numresults );
				$page = (int)$_GET['page'];

				if (( empty( $page ) )) {
					$page = 1;
				}


				if ($numrows < $page) {
					$page = 1;
				}

				$from = 10 * $page - 10;

				if (!( $sql = mysql_query( '' . 'select comid from comments WHERE place=\'' . $id . '\' and vis=\'1\'' ))) {
					exit( mysql_error(  ) );
					(bool)true;
				}

				$num_sql = mysql_num_rows( $sql );

				if (!( $viewcom = mysql_query( '' . 'SELECT * FROM comments WHERE place=\'' . $id . '\' and vis=\'1\' ORDER BY \'comid\' DESC limit ' . $from . ',10' ))) {
					exit( mysql_error(  ) );
					(bool)true;
				}

				$num_sql1 = mysql_num_rows( $viewcom );
				$pages = ceil( $num_sql / 10 );

				while ($row = mysql_fetch_array( $viewcom )) {
					$comid = $row['comid'];
					$acommentname = $row['acommentname'];
					$artiname = $row['artiname'];
					$acommentemail = $row['acommentemail'];
					$titcomment = $row['titcomment'];
					$acomment = $row['acomment'];
					$date = $row['date'];
					$place = $row['place'];
					$acomment = str_replace( '&lt;br /&gt;', '<br>', $acomment );
					echo '' . '<div>

<table border=\'0\' cellpadding=\'5\' cellspacing=\'0\' style=\'border-collapse: collapse\' width=\'100%\' class=\'teams00\'  >
<tr>
<td width=\'100%\' height=\'19\' style=\'background:#000000;\'><b><font color=\'#F2A820\'>&nbsp;' . $acommentname . '</font></b>
<div dir=\'rtl\'>
<b><font color=\'#F2A820\'>&nbsp;' . $titcomment . '</font></b>&nbsp<font color=\'#C3C3C3\'>
|&nbsp;' . $date . '&nbsp;&nbsp;' . $time . '
</font></div></td></tr>

<tr>
<td width=\'100%\' colspan=\'4\' height=\'32\'>
<p align=\'justiyfy\' style=\'color:#000000;\'>
' . $acomment . '

<br><div align=\'left\' style=\'color:#EC9F0A;\'>' . $acommentemail . '</div>

</p></td>
</tr>
</table>

</div><hr>';
				}

				echo '<br><div><span class=\'sp\'>&nbsp;&nbsp;</span> ';

				if (1 < $page) {
					$prev = $page - 1;
					echo ' <a href=' . $PHP_SELF . ( '' . "?cat=$cat&id=$id&page=" . $prev . '>«·”«»ﬁ</a>' );
				}

				$i = 1;

				while ($i <= $pages) {
					if ($page == $i) {
						echo '' . ' [' . $i . '] ';
					} 
else {
						echo ' <a href=' . $PHP_SELF . ( '' . "?cat=$cat&id=$id&page=" . $i . '>' . $i . '</a>' );
					}

					++$i;
				}


				if ($page < $pages) {
					$next = $page + 1;
					echo ' <a href=' . $PHP_SELF . ( '' . "?cat=$cat&id=$id&page=" . $next . '>«· «·Ì</a>' );
				}

				echo '</div>';
				echo '
</td>

</tr></table>











</td>
 <td width="14">&nbsp;</td>


 <td width="209" valign="top" style="background:#000000;">





          <div class="hed">
ŒÌ«—«  „ «Õ…
  </div>



<div>
<br>
<table width="100%">
<tr>
<td width="20%" align="center"><a class="alinks03" href=\'javascript:send(';
				echo $result[topic];
				echo ',';
				echo $result[id];
				echo ')\'>
 <div id="contact"><a href="contacts.php?id=';
				echo $result[id];
				echo '" rel="facebox">

 <img src="images/mail.gif" width="26" height="30"  align="absmiddle"  alt="«—”«· „ﬁ«·" border=0  >
 </a></div>  </td><td width="19%" align="center">
<a class="alinks03" href=\'print.php?id=';
				echo $result[id];
				echo '\' rel="facebox">
<img src="images/print.gif" width="26" height="30" alt="ÿ»«⁄… „ﬁ«·" align="absmiddle" border=0>
</a>
</td>
<td width="21%" align="center">

<a href="javascript:addToFav()"><img src="images/fiv.gif" width="26" height="30" alt="«·„›÷·…" border=0></a>
</td>


<td width="20%" align="center">
<a class="alinks03" href=\'save.php?id=';
				echo $result[id];
				echo '\' rel="facebox">

<img src="images/comm.gif" width="26" height="30" alt="Õ›Ÿ „ﬁ«·" border=0>
</a>
</td>

<td width="20%" align="center">

<a class="alinks03" HREF="#comm">
<img src="images/save.gif" width="26" height="30" alt=" ⁄·Ìﬁ" border=0>
</a>
</td>
</tr>


<tr>
<td align="center">
 <a class="alinks03" href="contacts.php?id=';
				echo $result[id];
				echo '" rel="facebox">
 «—”«·
</a></td><td align="center">

<a class="alinks03" href=\'print.php?id=';
				echo $result[id];
				echo '\' rel="facebox">
 ÿ»«⁄…
</a>
</td>
<td align="center">

<a class="alinks03" href="javascript:addToFav()">
 «·„›÷·…
</a>
</td>


<td align="center">

<a class="alinks03" HREF="#comm">
 ⁄·Ìﬁ
</a>
</td>


<td align="center">

<a class="alinks03" href=\'javascript:savenews(';
				echo $result[topic];
				echo ',';
				echo $result[id];
				echo ')\'>
Õ›Ÿ
</a>
</td>

</tr>



</table>

<br>
          <div class="hed3">
ÃœÌœ «·„ﬁ«·« 
  </div>


   ';

				if (!( $viewcomr = mysql_query( 'SELECT  id ,topic ,subject  FROM articles   ORDER BY id DESC limit 5' ))) {
					exit( mysql_error(  ) );
					(bool)true;
				}

				$co = 0;

				while ($result = mysql_fetch_array( $viewcomr )) {
					$result[subject] = textcut( $result[subject], 65 );
					echo '

    <div class="buttons" >

';
					echo '' . '<a   href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
					echo $result[subject] . '</a>';
					echo '</div>

';
				}

				echo '




          <div class="hed">
„‰ «·√—‘Ì›
  </div>


   ';

				if (!( $viewcomr = mysql_query( 'SELECT  id ,topic ,subject  FROM articles   ORDER BY rand() DESC limit 20' ))) {
					exit( mysql_error(  ) );
					(bool)true;
				}

				$co = 0;

				while ($result = mysql_fetch_array( $viewcomr )) {
					$result[subject] = textcut( $result[subject], 65 );
					echo '

    <div class="buttons" >

';
					echo '' . '<a   href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
					echo $result[subject] . '</a>';
					echo '</div>

';
				}

				echo '

';
				ban600(  );
				echo '

 </td>










</tr>
</table>
    </div>





';
			}

			echo '







';
		} 
else {
			$hname = 'ÃœÌœ „ﬁ«·«  ‰ﬁÿ… ÷Ê¡';
			$disc = 'ﬁ”„ „ Œ’’ »⁄—÷ ÃœÌœ «·„ﬁ«·«  «·„÷«›… »„Êﬁ⁄ ‰ﬁÿ… ÷Ê¡ »‘ Ï «·„Ã«·«  «·„ ‰Ê⁄… «·«œ»Ì… Ê«·›‰Ì… Ê«·Àﬁ«›Ì…';
			$keyw = '‰ﬁ… , ÷Ê¡ , ‰ﬁÿ…÷Ê¡ , Àﬁ«›… , ›‰ , «œ» ,›‰«‰Ì‰ , ›‰«‰« , ⁄·„ , „⁄—›… , «Œ·«ﬁ , „’—, «·ﬁ«Â—…, ·»‰«‰, «·⁄—», ⁄—» , Œ·ÌÃ , „”·”·« , «›·«„, ’Ê—, ›ÌœÌÊ';
			head( $hname, $disc, $keyw );
			top(  );
			echo '


      <div style="padding:0.2em;"></div>

       <div >

   <div align="right" style="height:20px; padding:0.1em;"><img src="images/hom.gif"  width="12" height="13" align="absmiddle" alt="«·—∆Ì”Ì…" border=0> <a  style="color:#000000; font-weight:normal; font-family:Tahoma; font-size:9pt;" href="index.php">«·—∆Ì”Ì… </a> <b>&raquo;</b> ';
			echo $hname;
			echo '  </div>

   <div> <div style="padding:0.1em;"></div>
 ';
			$counter = 0;

			if (!( $query2 = mysql_query( 'SELECT  id ,topic ,subject ,writer  ,description ,stime ,counter ,pic  FROM articles  ORDER BY id Desc LIMIT 1' ))) {
				exit( mysql_error(  ) );
				(bool)true;
			}


			while ($result = mysql_fetch_array( $query2 )) {
				$cat = $result[topic];
				++$counter;
				echo '
<div id="dog';
				echo $counter;
				echo '"  align=\'center\'>



      <div style="color:#000000; direction:ltr;">
 <table width="787" border="0" cellpadding="0" cellspacing="0"><tr> <!--<td valign="top" >

  ';
				echo '' . '<a class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
				echo '<img src="';
				echo $result[pic];
				echo '"  alt="';
				echo $result[subject];
				echo '"   width="260" height="180"  style="border:6px solid #ffffff;">
</a>

 </td> -->

 <td   valign="top" >





      <div style="background:#FABE3C ; border:6px solid #DBDBDB; height:160px; padding:0.7em; text-align:right;">

     <br />

  ';
				echo '' . '<a  class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
				echo '' . $result[subject] . '';
				echo '</a>
';
				$description = textcut( $result[description], 270 );
				echo '<p align=\'justify\' style=\'padding-top:0.3em; margin-top:0.3em; color:#000000; direction:rtl;\'>';
				echo $description . '...';
				echo '' . '<img src=\'images/more.png\' width=\'14\' height=\'15\' align=\'absmiddle\' alt=\'«· ›«’Ì·\'> <a  class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>«· ›«’Ì· </a></p>';
				echo '
';

				if (!( $viewcom = mysql_query( '' . 'SELECT * FROM comments WHERE place=' . $result['id'] . ' and vis=\'1\' ORDER BY \'comid\'' ))) {
					exit( mysql_error(  ) );
					(bool)true;
				}

				$num_sql1 = mysql_num_rows( $viewcom );
				echo '












            </div>








</td>

 </tr></table>
</div>
</div>
 ';
			}

			echo '






 </div>










<table  border="0" cellpadding="5" cellspacing="1"><tr>
<td valign="top">


<div style="text-align:center; padding:auto; margin:auto;">
    
';
			ban4681(  );
			echo ' </div>
     <div style="padding:0.5em;"></div>




   ';

			if (!( $viewcomr = mysql_query( 'SELECT  id ,topic ,subject  ,writer,description ,stime ,counter ,picsm  FROM articles   ORDER BY id DESC limit 10' ))) {
				exit( mysql_error(  ) );
				(bool)true;
			}

			$num_sql1 = mysql_num_rows( $viewcomr );
			$pages = ceil( $num_sql / 10 );
			$co = 0;
			echo '
 <table width="100%" border="0" cellpadding="0" cellspacing="0"><tr>';

			while ($result = mysql_fetch_array( $viewcomr )) {
				if ($result[id] == $noid) {
					continue;
				}

				++$counter;
				$cat = $result[topic];
				++$co;
				$times = date( 'h:m a', $result[stime] );
				$times = str_replace( 'pm', ' „”«¡«', $times );
				$times = str_replace( 'am', ' ’»«Õ«', $times );
				$result[stime] = ArabicTools::arabicdate( 'ar:l, d/F/Y', $result['stime'] );
				$result[stime] = str_replace( '/', '-', $result[stime] );
				$result[subject] = textcut( $result[subject], 50 );
				echo ' <td width="100%" valign="top" style="padding:0.0em; background:url(images/shade.gif ) repeat-x;">

     <div class="titblock2" style="text-align:right;" >
   &nbsp;';
				echo '' . '<a  class=\'alinks2\'  href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
				echo $result[subject] . '..</a>';
				echo '    <br />
 </div>


<div style=\' border:0px solid #E6E6E4; color:#000000;\'>




<div  style=\'height:100%; padding:0.4em;\'>
';
				echo '' . '<a class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
				echo '
';

				if ($result[picsm] == '') {
					echo '  <img src="images/unpic.gif"  alt="';
					echo $result[subject];
					echo '" vspace="5" hspace="5"  align="right"  width="140" height="110"  class="picnews2">
';
				} 
else {
					echo '<img src="';
					echo $result[picsm];
					echo '"  alt="';
					echo $result[subject];
					echo '" vspace="5" hspace="5"  align="right"  width="140" height="110"  class="picnews2">

';
				}

				echo '</a>

';
				$description = textcut( $result[description], 130 );
				echo '<p align=\'justify\' style=\' margin-top:0.0em; padding-top:0.0em; border:0px solid #E6E6E4; color:#000000;\'>';
				echo '' . ' <span><b style=\'font-size:9pt; color:#555555;\'></b> <span class=\'write0\'>' . $result['writer'] . '</span>
<br /><font style=\'font-size:7pt; color:#787878\'> ' . $result['stime'] . '</span> &nbsp; ' . $times . ' </font><br> ';
				echo $description . ( '' . '... <img src=\'images/more.png\' width=\'14\' height=\'15\' align=\'absmiddle\' alt=\'«· ›«’Ì·\'> <a  class=\'alinks\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>«· ›«’Ì· </a>' );
				echo '</p>';
				echo '
';
				echo '</div><div style=\'padding:0.2em; margin:0.0em;\' ></div></td>';

				if ($co == 1) {
					echo '</tr><tr><td></td></tr><tr>';
					$co = 0;
					continue;
				}
			}

			echo '  </table>


 </td>

 <td>&nbsp;</td>

<td width="270" valign="top" >



      <div style="padding:0.2em;"></div>




   ';

			if (!( $viewcomr = mysql_query( 'SELECT  id ,topic ,subject  ,writer,description ,stime ,counter ,picsm  FROM articles   ORDER BY id DESC limit 10' ))) {
				exit( mysql_error(  ) );
				(bool)true;
			}

			$num_sql1 = mysql_num_rows( $viewcomr );
			$pages = ceil( $num_sql / 10 );
			$co = 0;
			echo '
 <table width="100%" border="0" cellpadding="0" cellspacing="0"><tr>';

			while ($result = mysql_fetch_array( $viewcomr )) {
				if ($result[id] == $noid) {
					continue;
				}

				++$counter;
				$cat = $result[topic];
				++$co;
				$times = date( 'h:m a', $result[stime] );
				$times = str_replace( 'pm', ' „”«¡«', $times );
				$times = str_replace( 'am', ' ’»«Õ«', $times );
				$result[stime] = ArabicTools::arabicdate( 'ar:l, d/F/Y', $result['stime'] );
				$result[stime] = str_replace( '/', '-', $result[stime] );
				$result[subject] = textcut( $result[subject], 50 );
				echo ' <td width="100%" valign="top" style="padding:0.0em; background:url(images/shade.gif ) repeat-x;">

     <div class="hed3" style="text-align:right;" >
   &nbsp;';
				echo '' . '<a  class=\'alinks2\'  href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
				echo $result[subject] . '..</a>';
				echo '    <br />
 </div>


<div style=\' padding:0.3em; height:131px; background:#000000; border:0px solid #E6E6E4; color:#ffffff;\'>

<br>
';
				echo '' . '<a class=\'alinks02\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>';
				echo '
';

				if ($result[picsm] == '') {
					echo '  <img src="images/unpic.gif"  alt="';
					echo $result[subject];
					echo '" vspace="5" hspace="5"  align="right"  width="90" height="80"  class="picnews2" style="border:3px solid #323232;">
';
				} 
else {
					echo '<img src="';
					echo $result[picsm];
					echo '"  alt="';
					echo $result[subject];
					echo '" vspace="5" hspace="5"  align="right"  width="90" height="80"  class="picnews2" style="border:3px solid #323232;">

';
				}

				echo '</a>

';
				$description = textcut( $result[description], 75 );
				echo '<p  style=\' margin-top:0.0em; padding-top:0.0em; border:0px solid #E6E6E4; color:#ffffff;\'>';
				echo $description . ( '' . '... <img src=\'images/more.png\' width=\'14\' height=\'15\' align=\'absmiddle\' alt=\'«· ›«’Ì·\'> <a  class=\'alinks03\' href=\'articles.php?cat=' . $result['topic'] . '&id=' . $result['id'] . '\'>«· ›«’Ì· </a>' );
				echo '</p>';
				echo '
';
				echo '</div><div style=\'padding:0.2em; margin:0.0em;\' ></div></td>';

				if ($co == 1) {
					echo '</tr><tr><td></td></tr><tr>';
					$co = 0;
					continue;
				}
			}

			echo '  </table>


</td>






 </tr></table>











';
		}
	}

	bottom(  );
	foot(  );
?>