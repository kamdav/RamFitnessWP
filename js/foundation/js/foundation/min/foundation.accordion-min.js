!function($,t,a,e){"use strict";Foundation.libs.accordion={name:"accordion",version:"5.3.3",settings:{active_class:"active",multi_expand:!1,toggleable:!0,callback:function(){}},init:function(t,a,e){this.bindings(a,e)},events:function(){var t=this,a=this.S;a(this.scope).off(".fndtn.accordion").on("click.fndtn.accordion","["+this.attr_name()+"] > dd > a",function(e){var n=a(this).closest("["+t.attr_name()+"]"),i=t.attr_name()+"="+n.attr(t.attr_name()),s=n.data(t.attr_name(!0)+"-init"),c=a("#"+this.href.split("#")[1]),l=$("> dd",n),d=l.children(".content"),o=d.filter("."+s.active_class);return e.preventDefault(),n.attr(t.attr_name())&&(d=d.add("["+i+"] dd > .content"),l=l.add("["+i+"] dd")),s.toggleable&&c.is(o)?(c.parent("dd").toggleClass(s.active_class,!1),c.toggleClass(s.active_class,!1),s.callback(c),c.triggerHandler("toggled",[n]),void n.triggerHandler("toggled",[c])):(s.multi_expand||(d.removeClass(s.active_class),l.removeClass(s.active_class)),c.addClass(s.active_class).parent().addClass(s.active_class),s.callback(c),c.triggerHandler("toggled",[n]),void n.triggerHandler("toggled",[c]))})},off:function(){},reflow:function(){}}}(jQuery,window,window.document);