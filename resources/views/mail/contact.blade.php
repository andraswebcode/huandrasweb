<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kapcsolati üzenet</title>
</head>
<body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial,sans-serif;">
	<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f4f4f4;padding:30px 0;">
		<tr>
			<td align="center">
				<table width="600" cellpadding="0" cellspacing="0" border="0" style="background:#ffffff;border-radius:8px;overflow:hidden;">
					<tr>
						<td style="background:#1f2937;padding:20px;color:#ffffff;text-align:center;font-size:24px;font-weight:bold;">
							Új kapcsolatfelvételi üzenet
						</td>
					</tr>
					<tr>
						<td style="padding:30px;">
							<table width="100%" cellpadding="0" cellspacing="0" border="0">
								<tr>
									<td style="padding:10px 0;font-weight:bold;width:120px;">Név:</td>
									<td style="padding:10px 0;">{{ $name }}</td>
								</tr>
								<tr>
									<td style="padding:10px 0;font-weight:bold;">Email:</td>
									<td style="padding:10px 0;">
										<a href="mailto:{{ $email }}">{{ $email }}</a>
									</td>
								</tr>
								<tr>
									<td colspan="2" style="padding-top:20px;font-weight:bold;">
										Üzenet:
									</td>
								</tr>
								<tr>
									<td colspan="2" style="padding-top:10px;">
										<div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:6px;padding:15px;line-height:1.6;">
											{{ $msg }}
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style="background:#f9fafb;padding:15px;text-align:center;color:#6b7280;font-size:12px;">
							Ezt az üzenetet a weboldal kapcsolatfelvételi űrlapja küldte.
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
