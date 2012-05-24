<!DOCTYPE html>
<html>
<head>
	<title>{$title}</title>
</head>
<body>
	<div id="header">
		{include file="header.tpl"}
	</div>
    
    <div id="content">
		{$this->layout()->content}
    </div>
    
    <div id="footer">
    	{include file="footer.tpl"}
    </div>
</body>
</html>