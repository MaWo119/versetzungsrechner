<!DOCTYPE html>
<html>
    <head>
        <title>Versetzungsrechner</title>
        <meta charset="utf-8"/>
		<link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <form id="faecher">
            <!--Kernfächer-->
			<p>Kernf&auml;cher</p>
            <table>
                <tr>
                    <td><h5>Deutsch</h5></td>
                    <td><h5>Englisch</h5></td>
                    <td><h5>Mathematik</h5></td>
                    <td><h5>Gesundheit</h5></td>
                </tr>
                <tr>
                    <!--Kernfach 1-->
                    <td>
                        <select id=1 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                    <!--Kernfach 2-->
                    <td>
                        <select id=2 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                    <!--Kernfach 3-->
                    <td>
                        <select id=3 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                    <!--Kernfach 4-->
                    <td>
                        <select id=4 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br/>
            <!--Grundfächer-->
			<p>Grundf&auml;cher</p>
            <table>
                <tr>
                    <td>Naturwissenschaft</td>
                    <td>Informationsverarbeitung</td>
                    <td>2. Fremdsprache</td>
                    <td>Gemeinschaftskunde</td>
                    <td>Religion/ Ethik</td>
                    <td>Sport</td>
                    <td>P&auml;dagogik</td>
					<td>Psychologie</td>
                </tr>
                <tr>
                    <!--Grundfach 1-->
                    <td>
                        <select id=5 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                    <!--Grundfach 2-->
                    <td>
                        <select id=6 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                    <!--Grundfach 3-->
                    <td>
                        <select id=7 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                    <!--Grundfach 4-->
                    <td>
                        <select id=8 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                    <!--Grundfach 5-->
                    <td>
                        <select id=9 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                    <!--Grundfach 6-->
                    <td>
                        <select id=10 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                    <!--Grundfach 7-->
                    <td>
                        <select id=11 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
                    <!--Grundfach 8-->
                    <td>
                        <select id=12 size="1">
                            <option value="1">Note 1</option>
                            <option value="2">Note 2</option>
                            <option value="3">Note 3</option>
                            <option value="4" selected>Note 4</option>
                            <option value="5">Note 5</option>
                            <option value="6">Note 6</option>
                        </select>
                    </td>
				</tr>
			</table>
			<br/>
			<br/>
        </form>
		<input type="button" value="Versetzung pr&uuml;fen" onclick="pruefen()">
        <br/>
		<br/>
		<a href="./index.html"> zur&uuml;ck</a>

        <!--JS-File einbinden-->
        <script type="text/javascript" src="./gesundheit.js"></script>
    </body>
</html>
