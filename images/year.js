now = new Date
theYear=now.getYear()
if (theYear < 1900)
theYear=theYear+1900
document.write("Copyright "+theYear+".")