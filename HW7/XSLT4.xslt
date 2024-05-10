<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl ="http://www.w3.org/1999/XSL/Format" xmlns = "http://www.w3.org/1999/xhtml">
    <xsl:template match="/">
        <html>
            <body>
                <xsl:apply-templates select="catalog/car"/>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="car">
        <h2>Car Details:</h2>
        <p>Make: <xsl:value-of select="make"/></p>
        <p>Model: <xsl:value-of select="model"/></p>
        <p>Year: <xsl:value-of select="year"/></p>
        <p>Color: <xsl:value-of select="color"/></p>
        <p>Number of Doors: <xsl:value-of select="number_of_doors"/></p>
        <p>Transmission Type: <xsl:value-of select="transmission_type"/></p>
        <p>Engine:</p>
        <ul>
            <li>Number of Cylinders: <xsl:value-of select="engine/number_of_cylinders"/></li>
            <li>Fuel System: <xsl:value-of select="engine/fuel_system"/></li>
        </ul>
        <p>Accessories:</p>
        <ul>
            <xsl:if test="accessories/@radio='yes'">
                <li>Radio</li>
            </xsl:if>
            <xsl:if test="accessories/@air_conditioning='yes'">
                <li>Air Conditioning</li>
            </xsl:if>
            <xsl:if test="accessories/@power_windows='yes'">
                <li>Power Windows</li>
            </xsl:if>
            <xsl:if test="accessories/@power_steering='yes'">
                <li>Power Steering</li>
            </xsl:if>
            <xsl:if test="accessories/@power_brakes='yes'">
                <li>Power Brakes</li>
            </xsl:if>
        </ul>
    </xsl:template>
</xsl:stylesheet>
