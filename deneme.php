<?php
						$options = ['cost' => 11];
						$pass = 'ogi123';
						$hash = password_hash($pass, PASSWORD_BCRYPT, $options);
						$hash2 = password_hash($hash, PASSWORD_BCRYPT, $options);
						if (password_verify($hash,$hash2)) {
						
								echo "EŞLEŞTİ";
						}	

?>