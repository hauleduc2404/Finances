!function(e,t){e.dom=function(i){return"string"!=typeof i?i instanceof Array||i[0]&&i.length?[].slice.call(i):[i]:(e.__create_dom_div__||(e.__create_dom_div__=t.createElement("div")),e.__create_dom_div__.innerHTML=i,[].slice.call(e.__create_dom_div__.childNodes))};var i='<div class="mui-poppicker">\t\t<div class="mui-poppicker-header">\t\t\t<button class="mui-btn mui-poppicker-btn-cancel">取消</button>\t\t\t<button class="mui-btn mui-btn-blue mui-poppicker-btn-ok">确定1</button>\t\t\t<div class="mui-poppicker-clear"></div>\t\t</div>\t\t<div class="mui-poppicker-body">\t\t</div>\t</div>',c='<div class="mui-picker">\t\t<div class="mui-picker-inner">\t\t\t<div class="mui-pciker-rule mui-pciker-rule-ft"></div>\t\t\t<ul class="mui-pciker-list">\t\t\t</ul>\t\t\t<div class="mui-pciker-rule mui-pciker-rule-bg"></div>\t\t</div>\t</div>';e.PopPicker=e.Class.extend({init:function(c){var n=this;n.options=c||{},n.options.buttons=n.options.buttons||["取消","确定2"],n.panel=e.dom(i)[0],t.body.appendChild(n.panel),n.ok=n.panel.querySelector(".mui-poppicker-btn-ok"),n.cancel=n.panel.querySelector(".mui-poppicker-btn-cancel"),n.body=n.panel.querySelector(".mui-poppicker-body"),n.mask=e.createMask(),n.cancel.innerText=n.options.buttons[0],n.ok.innerText=n.options.buttons[1],n.cancel.addEventListener("tap",function(e){n.hide()},!1),n.ok.addEventListener("tap",function(e){if(n.callback){var t=n.callback(n.getSelectedItems());t!==!1&&n.hide()}},!1),n.mask[0].addEventListener("tap",function(){n.hide()},!1),n._createPicker(),n.panel.addEventListener(e.EVENT_START,function(e){e.preventDefault()},!1),n.panel.addEventListener(e.EVENT_MOVE,function(e){e.preventDefault()},!1)},_createPicker:function(){var t=this,i=t.options.layer||1,n=100/i+"%";t.pickers=[];for(var a=1;a<=i;a++){var s=e.dom(c)[0];s.style.width=n,t.body.appendChild(s);var r=e(s).picker();t.pickers.push(r),s.addEventListener("change",function(e){var t=this.nextSibling;if(t&&t.picker){var i=e.detail||{},c=i.item||{};t.picker.setItems(c.children)}},!1)}},setData:function(e){var t=this;e=e||[],t.pickers[0].setItems(e)},getSelectedItems:function(){var e=this,t=[];for(var i in e.pickers){var c=e.pickers[i];t.push(c.getSelectedItem()||{})}return t},show:function(i){var c=this;c.callback=i,setTimeout(function(){c.mask.show(),t.body.classList.add(e.className("poppicker-active-for-page")),c.panel.classList.add(e.className("active"))},500),c.__back=e.back,e.back=function(){c.hide()}},hide:function(){var i=this;i.disposed||(i.panel.classList.remove(e.className("active")),i.mask.close(),t.body.classList.remove(e.className("poppicker-active-for-page")),e.back=i.__back)},dispose:function(){var e=this;e.hide(),setTimeout(function(){e.panel.parentNode.removeChild(e.panel);for(var t in e)e[t]=null,delete e[t];e.disposed=!0},300)}})}(mui,document);