<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" 
                xmlns:html="http://www.w3.org/TR/REC-html40"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
	<xsl:template match="/">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>

		<style type="text/css">
		#xml_table th
		{
		background-color:menu
		}
		tr.high {
				background-color:whitesmoke;
				}
				tr td a {
				color:black;
				}
				#footer
				{
				border: 1px solid #2580B2;
                margin-top: 16px;
                width: 655px;
	            font-size:16pt;
				color:gray;
				text-align: center;
				background: none repeat scroll 0 0 #CFEBF7;
				}
				#footer a
				{
				color:gray;
				
				}
		</style>
		<title>XML Sitemap</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		</head>
		<body>
		<div id="content"><h1>XML Sitemap</h1>
		<table id="xml_table">
		<th>URL</th>
		<th>Priority</th>
		<th>Change Frequency</th>
		<th>LastChange (GMT)</th>
		<xsl:for-each select="urlset/url">
		<tr><xsl:if test="position() mod 2 != 1">
									<xsl:attribute  name="class">high</xsl:attribute>
		</xsl:if>
	    <td>
		<xsl:variable name="itemURL">
		<xsl:value-of select="loc"/>
		</xsl:variable>
		<a href="{$itemURL}">
		<xsl:value-of select="loc"/>
									</a>
								</td>
								<td>
									<xsl:value-of select="concat(priority*100,'%')"/>
								</td>
								<td>
									<xsl:value-of select="changefreq"/>
								</td>
								<td>
									<xsl:value-of select="lastmod"/>
								</td>
							</tr>
						</xsl:for-each>
		</table>
		</div>
		<div id="footer">
		Designed By <a href="http://links7live.com/">Links7Live.Com</a>
		</div>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>