/* Contao Open Source CMS :: Copyright (C) 2005-2012 Leo Feyer :: LGPL license */
(function(){tinymce.create("tinymce.plugins.TypolinksPlugin",{init:function(a,b){a.addCommand("mceTypolinks",function(){a.windowManager.open({file:b+"/typolinks.php",width:360+parseInt(a.getLang("typolinks.delta_width",0)),height:256+parseInt(a.getLang("typolinks.delta_height",0)),inline:1},{plugin_url:b})}),a.addButton("typolinks",{title:"typolinks.link_desc",cmd:"mceTypolinks",image:b+"/img/link.gif"}),a.addShortcut("ctrl+k","typolinks.desc","mceTypolinks"),a.onNodeChange.add(function(a,b,c,d){b.setDisabled("typolinks",d&&c.nodeName!="A"),b.setActive("typolinks",c.nodeName=="A")}),a.addCommand("mceTypobox",function(){a.windowManager.open({file:b+"/typobox.htm",width:360+parseInt(a.getLang("typobox.delta_width",0)),height:256+parseInt(a.getLang("typobox.delta_height",0)),inline:1},{plugin_url:b})}),a.addButton("typobox",{title:"typolinks.image_desc",cmd:"mceTypobox",image:b+"/img/image.gif"})},getInfo:function(){return{longname:"Contao plugin",author:"Leo Feyer",authorurl:"http://www.inetrobots.com",infourl:"http://www.contao.org",version:"3.4.6"}}}),tinymce.PluginManager.add("typolinks",tinymce.plugins.TypolinksPlugin)})();