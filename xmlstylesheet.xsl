<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
    <html>
      <head>
        <title>Billie Eilish Music Library</title>
      </head>
      <body>
        <h1>Billie Eilish Music Library</h1>
        <table border="1" >
          <tr>
            <th>Title</th>
            <th>Artist</th>
            <th>Year</th>
            <th>Tracks</th>
          </tr>
          <xsl:for-each select="music-library/album">
            <tr>
              <td><xsl:value-of select="title"/></td>
              <td><xsl:value-of select="artist"/></td>
              <td><xsl:value-of select="year"/></td>
              <td>
                <ul>
                  <xsl:for-each select="tracks/track">
                    <li><xsl:value-of select="."/></li>
                  </xsl:for-each>
                </ul>
              </td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
