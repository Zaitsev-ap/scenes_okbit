<?php $GLOBALS['_2125382456_']=Array(base64_decode('cHJpbnRfcg=='),base64_decode('c3RyZWFt' .'X2' .'Nv' .'bnRleH' .'R' .'fY3Jl' .'Y' .'XRl'),base64_decode('ZmlsZV9nZX' .'RfY2' .'9udG' .'VudHM='),base64_decode('cHJp' .'b' .'nRfcg=='),base64_decode('cH' .'Jpb' .'nRf' .'c' .'g=='),base64_decode('cH' .'JpbnRfcg=='),base64_decode('cHJp' .'bnRfcg=' .'='),base64_decode('' .'c' .'H' .'JpbnRfcg=' .'='),base64_decode('cH' .'JpbnR' .'fc' .'g==')); ?><?php function _1560489982($i){$a=Array('Li4vLi4vY29uZmlnLnBocA==','cmVzLmludC5waHA=','zvjo4ergIA==','bmFtZQ==','','bWFpbA==','','c2VyaWFs','','bGljX2lk','','bGljX3llcw==','','PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIiByb2xlPSJhbGVydCI+','PC9kaXY+','aHR0cDovL3NjZW5lcy5zaWx2ZXJnb2xkLmVlL3Zlci9pZC5waHA/bW9kZT1hY3RpdmU=','bmFtZT0=','c2VyaWFs','JmJlbmNoPQ==','bGljX2lk','Jm5hbWUyPQ==','bmFtZQ==','Jm5hbWUzPQ==','bWFpbA==','aHR0cA==','bWV0aG9k','UE9TVA==','aGVhZGVy','Q29udGVudC10eXBlOiBhcHBsaWNhdGlvbi94LXd3dy1mb3JtLXVybGVuY29kZWQ=','Y29udGVudA==','c2VyaWFs','bGljX2lk','MA==','MQ==','MA==','MA==','PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtc3VjY2VzcyIgcm9sZT0iYWxlcnQiPg==','PC9kaXY+','MQ==','PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIiByb2xlPSJhbGVydCI+','PC9kaXY+','Mg==','PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIiByb2xlPSJhbGVydCI+','PC9kaXY+','Mw==','PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIiByb2xlPSJhbGVydCI+','PC9kaXY+','NQ==','PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIiByb2xlPSJhbGVydCI+','PC9kaXY+','PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIiByb2xlPSJhbGVydCI+','PC9kaXY+');return base64_decode($a[$i]);} ?><?php require _1560489982(0);require _1560489982(1);$_0=mysqli_connect($_1,DB_USER,DB_PASSWORD,DB_NAME)or die(_1560489982(2) .mysqli_error($_0));$print=($_POST);if($print[_1560489982(3)]==_1560489982(4)|| $print[_1560489982(5)]==_1560489982(6)|| $print[_1560489982(7)]==_1560489982(8)|| $print[_1560489982(9)]==_1560489982(10)|| $print[_1560489982(11)]==_1560489982(12)){$GLOBALS['_2125382456_'][0](_1560489982(13) .$message0 ._1560489982(14));}else{$_2=_1560489982(15);$_3=_1560489982(16) .$print[_1560489982(17)] ._1560489982(18) .$print[_1560489982(19)] ._1560489982(20) .$print[_1560489982(21)] ._1560489982(22) .$print[_1560489982(23)];$_4=array(_1560489982(24)=> array(_1560489982(25)=> _1560489982(26),_1560489982(27)=> _1560489982(28),_1560489982(29)=> $_3));$_5=$GLOBALS['_2125382456_'][1]($_4);$contents=$GLOBALS['_2125382456_'][2]($_2,false,$_5);eval('?' .'>' .$contents .'<' .'?');$_6=$print[_1560489982(30)];$_7=$print[_1560489982(31)];$_8=$new_key;$_9=$new_key;if($new_key != _1560489982(32))$_10=_1560489982(33);else $_10=_1560489982(34);$_11="INSERT INTO `event` (ID,SERIAL,SERIAL_ID,HASH_NEW,HASH_OLD,STATE) VALUES (1,'{$_6}','{$_7}','{$_8}','{$_9}','{$_10}') ON DUPLICATE KEY UPDATE SERIAL='{$_6}', SERIAL_ID='{$_7}', HASH_NEW='{$_8}', HASH_OLD='{$_9}', STATE='{$_10}'";mysqli_query($_0,$_11);mysqli_close($_0);if($new_active == _1560489982(35))$GLOBALS['_2125382456_'][3](_1560489982(36) .$message1 ._1560489982(37));else if($new_active == _1560489982(38))$GLOBALS['_2125382456_'][4](_1560489982(39) .$message2 ._1560489982(40));else if($new_active == _1560489982(41))$GLOBALS['_2125382456_'][5](_1560489982(42) .$message3 ._1560489982(43));else if($new_active == _1560489982(44))$GLOBALS['_2125382456_'][6](_1560489982(45) .$message4 ._1560489982(46));else if($new_active == _1560489982(47))$GLOBALS['_2125382456_'][7](_1560489982(48) .$message5 ._1560489982(49));else $GLOBALS['_2125382456_'][8](_1560489982(50) .$message6 ._1560489982(51));} ?>