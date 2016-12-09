function formWind()
{
    var newWind = window.open("", "newwin", "width=500, height=500, top=100, left=100, status=no, location=no, toolbar=no, menubar=no");
    newWind.document.write("<html><head>");
    newWind.document.write("<title>Edit Profile</title>");
    newWind.document.write("</head>");
    newWind.document.write("<body>");
    newWind.document.write("<form name=\"\" action=\"\" method=\"post\">");
    newWind.document.write("<input type=\"text\" size=\"20\" name=\"\"><br>");
    newWind.document.write("<input type=\"submit\" value=\"Send\" name=\"\">");
    newWind.document.write("</body></html>");
}