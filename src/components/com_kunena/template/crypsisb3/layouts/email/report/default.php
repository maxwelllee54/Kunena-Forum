<?php
/**
 * Kunena Component
 * @package     Kunena.Template.Crypsis
 * @subpackage  Layout.Email
 *
 * @copyright   (C) 2008 - 2016 Kunena Team. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link        https://www.kunena.org
 **/
defined('_JEXEC') or die;

// Report moderator email (HTML)
$this->mail->isHtml(true);

$user = $this->message->getAuthor();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0;">
		<meta name="format-detection" content="telephone=no" />

		<style>
			/* Reset styles */
			body {
				margin: 0;
				padding: 0;
				min-width: 100%;
				width: 100% !important;
				height: 100% !important;
			}

			body, table, td, div, p, a {
				-webkit-font-smoothing: antialiased;
				text-size-adjust: 100%;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
				line-height: 100%;
			}

			table, td {
				mso-table-lspace: 0;
				mso-table-rspace: 0;
				border-collapse: collapse !important;
				border-spacing: 0;
			}

			img {
				border: 0;
				line-height: 100%;
				outline: none;
				text-decoration: none;
				-ms-interpolation-mode: bicubic;
			}

			#outlook a {
				padding: 0;
			}

			.ReadMsgBody {
				width: 100%;
			}

			.ExternalClass {
				width: 100%;
			}

			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
				line-height: 100%;
			}

			/* Rounded corners for advanced mail clients only */
			@media all and (min-width: 560px) {
				.container {
					border-radius: 8px;
					-webkit-border-radius: 8px;
					-moz-border-radius: 8px;
					-khtml-border-radius: 8px;
				}
			}

			/* Set color for auto links (addresses, dates, etc.) */
			a, a:hover {
				color: #127DB3;
			}

			.footer a, .footer a:hover {
				color: #999999;
			}

		</style>

		<!-- MESSAGE SUBJECT -->
		<title><?php echo $msg1 . " " . $config->board_title; ?></title>

	</head>

	<!-- BODY -->
	<body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%;
	background-color: #F0F0F0;
	color: #000000;"
		bgcolor="#F0F0F0"
		text="#000000">

	<!-- WRAPPER -->
	<!-- Set wrapper width (twice) -->
	<table border="0" cellpadding="0" cellspacing="0" align="center"
		style="border-collapse: collapse; border-spacing: 0; padding: 0; width: 100%; background-color: #f0f0f0;" class="wrapper">

		<tr>
			<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; width: 87.5%;
			background-color: #F0F0F0;
			padding: 20px 6.25%;">

				<!-- LOGO -->
				<!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2. URL format: http://domain.com/?utm_source={{Campaign-Source}}&utm_medium=email&utm_content=logo&utm_campaign={{Campaign-Name}} -->
				<p>
				</p>
			</td>
		</tr>

		<!-- End of WRAPPER -->
	</table>

	<!-- SECTION / BACKGROUND -->
	<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;" class="background">
		<tr>
			<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;"
				bgcolor="#F0F0F0">

				<!-- WRAPPER / CONTEINER -->
				<table border="0" cellpadding="0" cellspacing="0" align="center"
					bgcolor="#FFFFFF"
					width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="container">

					<!-- HEADER -->
					<tr>
						<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; width: 87.5%; font-size: 16px; font-weight: bold; line-height: 130%;
			padding: 25px 6.25% 0;color: #999999;font-family: sans-serif;" class="header">
							<?php echo JText::_('COM_KUNENA_REPORT_RSENDER') . " {$this->me->username} ({$this->me->name})"; ?>
						</td>
					</tr>

					<!-- HERO IMAGE -->
					<tr>
						<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 20px 0 0;" class="hero"><a target="_blank" style="text-decoration: none;"
								href="#"><img border="0" vspace="0" hspace="0"
									src="<?php echo JUri::base() . '/media/kunena/email/hero-wide.png';?>"
									alt="Please enable images to view this content" title="Forum"
									width="560" style="
			width: 100%;
			max-width: 560px;
			color: #000000; font-size: 13px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;" /></a>
						</td>
					</tr>

					<!-- PARAGRAPH -->
					<tr>
						<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; width: 87.5%; font-size: 17px;
			padding: 25px 6.25% 0;color: #999999;font-family: sans-serif;text-align:left;" class="paragraph">
							<div><?php echo JText::_('COM_KUNENA_REPORT_RREASON') . " " . $this->title; ?></div>
							<div><?php echo JText::_('COM_KUNENA_REPORT_RMESSAGE') . " " . $this->content; ?></div>

							<div><?php echo JText::_('COM_KUNENA_REPORT_POST_POSTER') . " {$user->username} ({$user->name})";?></div>
							<div><?php echo JText::_('COM_KUNENA_REPORT_POST_SUBJECT') . ": " . $this->message->getTopic()->subject; ?></div>
							<br />
							<div><?php echo JText::_('COM_KUNENA_REPORT_POST_MESSAGE'); ?></div>
							<hr />
							<div><?php echo $this->message->displayField('message'); ?></div>
						</td>
					</tr>

					<!-- BUTTON -->
					<tr>
						<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; width: 87.5%;
			padding: 25px 6.25% 5px;" class="button"><a
								href="<?php echo $this->messageLink; ?>" target="_blank" style="text-decoration: underline;">
								<table border="0" cellpadding="0" cellspacing="0" align="center" style="max-width: 240px; min-width: 120px; border-collapse: collapse; border-spacing: 0; padding: 0;">
									<tr>
										<td align="center" valign="middle" style="padding: 12px 24px; margin: 0; text-decoration: underline; border-collapse: collapse; border-spacing: 0; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px;"
											bgcolor="#0072C6"><a target="_blank" style="text-decoration: underline;
					color: #FFFFFF; font-family: sans-serif; font-size: 17px; font-weight: 400; line-height: 120%;"
												href="<?php echo $this->messageLink; ?>">
												<?php echo JText::_('COM_KUNENA_REPORT_POST_LINK'); ?>
											</a>
										</td>
									</tr>
									<tr>
										<td></td>
									</tr>
								</table>
							</a>
						</td>
					</tr>

					<!-- End of WRAPPER -->
				</table>

				<!-- WRAPPER -->
				<table border="0" cellpadding="0" cellspacing="0" align="center"
					width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="wrapper">

<!--					<!-- SOCIAL NETWORKS -->-->
<!--					<tr>-->
<!--						<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; width: 87.5%;-->
<!--			padding: 25px 6.25% 0;" class="social-icons">-->
<!--							<table-->
<!--								width="256" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse: collapse; border-spacing: 0; padding: 0;">-->
<!--								<tr>-->
<!---->
<!--									<!-- ICON 1 -->-->
<!--									<td align="center" valign="middle" style="margin: 0; padding: 0 10px;border-collapse: collapse; border-spacing: 0;">-->
<!--										<a target="_blank"-->
<!--											href="#"-->
<!--											style="text-decoration: none;"><img border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;-->
<!--					color: #000000;"-->
<!--												alt="F" title="Facebook"-->
<!--												width="44" height="44"-->
<!--												src="https://raw.githubusercontent.com/Kunena/Kunena-Forum/K5.0/src/media/kunena/email/facebook.png"></a>-->
<!--									</td>-->
<!---->
<!--									<!-- ICON 2 -->-->
<!--									<td align="center" valign="middle" style="margin: 0; padding: 0 10px;border-collapse: collapse; border-spacing: 0;">-->
<!--										<a target="_blank"-->
<!--											href="#"-->
<!--											style="text-decoration: none;"><img border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;-->
<!--					color: #000000;"-->
<!--												alt="T" title="Twitter"-->
<!--												width="44" height="44"-->
<!--												src="https://raw.githubusercontent.com/Kunena/Kunena-Forum/K5.0/src/media/kunena/email/twitter.png"></a>-->
<!--									</td>-->
<!---->
<!--									<!-- ICON 3 -->-->
<!--									<td align="center" valign="middle" style="margin: 0; padding: 0 10px;border-collapse: collapse; border-spacing: 0;">-->
<!--										<a target="_blank"-->
<!--											href="#"-->
<!--											style="text-decoration: none;"><img border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;-->
<!--					color: #000000;"-->
<!--												alt="G" title="Google Plus"-->
<!--												width="44" height="44"-->
<!--												src="https://raw.githubusercontent.com/Kunena/Kunena-Forum/K5.0/src/media/kunena/email/googleplus.png"></a>-->
<!--									</td>-->
<!---->
<!--									<!-- ICON 4 -->-->
<!--									<td align="center" valign="middle" style="margin: 0; padding: 0 10px;border-collapse: collapse; border-spacing: 0;">-->
<!--										<a target="_blank"-->
<!--											href="#"-->
<!--											style="text-decoration: none;"><img border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;-->
<!--					color: #000000;"-->
<!--												alt="I" title="Instagram"-->
<!--												width="44" height="44"-->
<!--												src="https://raw.githubusercontent.com/Kunena/Kunena-Forum/K5.0/src/media/kunena/email/instagram.png"></a>-->
<!--									</td>-->
<!---->
<!--								</tr>-->
<!--							</table>-->
<!--						</td>-->
<!--					</tr>-->

					<!-- FOOTER -->
					<tr>
						<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; width: 87.5%; font-size: 13px; font-weight: 400; line-height: 150%;
			padding: 20px 6.25%;color: #999999;font-family: sans-serif;" class="footer">
							<?php echo JText::_('COM_KUNENA_POST_EMAIL_NOTIFICATION3'); ?><br />
						</td>
					</tr>

					<!-- End of WRAPPER -->
				</table>

				<!-- End of SECTION / BACKGROUND -->
			</td>
		</tr>
	</table>

	</body>
</html>


<?php
// Email as plain text:

$alt = <<<EOS
{$this->text('COM_KUNENA_REPORT_RSENDER')} {$this->me->username} ({$this->me->name})
{$this->text('COM_KUNENA_REPORT_RREASON')} {$this->title}
{$this->text('COM_KUNENA_REPORT_RMESSAGE')} {$this->content}

{$this->text('COM_KUNENA_REPORT_POST_POSTER')} {$user->username} ({$user->name})
{$this->text('COM_KUNENA_REPORT_POST_SUBJECT')}: {$this->message->getTopic()->subject}

{$this->text('COM_KUNENA_REPORT_POST_MESSAGE')}
-----
{$this->message->displayField('message', false)}
-----

{$this->text('COM_KUNENA_REPORT_POST_LINK')} {$this->messageLink}
EOS;
$this->mail->AltBody = $alt;