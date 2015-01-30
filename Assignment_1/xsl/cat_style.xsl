<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/LEASH_LIST">

  <html>
  	<body>
	  <h2>GLEASH'S LEASHES</h2>
	  <table border="1">
	    <tr bgcolor="#9acd32">
	      <th>SPORTY LEASHES</th>
	    </tr>
	    <xsl:for-each select="Leash_list/leash">
		    <tr>
		      <td><xsl:value-of select="title"/></td>
		    </tr>
		</xsl:for-each>
	  </table>
  	</body>
  </html>

</xsl:template>
</xsl:stylesheet>