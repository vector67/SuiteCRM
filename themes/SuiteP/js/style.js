/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

SUGAR.measurements = {
  "breakpoints": {
    "x-small": 750,
    "small": 768,
    "medium": 992,
    "large": 1130,
    "x-large": 1250
  }
};

SUGAR.loaded_once = false;

$(document).ready(function () {
  loadSidebar();
  $("ul.clickMenu").each(function (index, node) {
    $(node).sugarActionMenu();
  });
  // Back to top animation
  $('#backtotop').click(function (event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, 500); // Scroll speed to the top
  });
});
YAHOO.util.Event.onAvailable('sitemapLinkSpan', function () {
  document.getElementById('sitemapLinkSpan').onclick = function () {
    ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_LOADING_PAGE'));
    var smMarkup = '';
    var callback = {
      success: function (r) {
        ajaxStatus.hideStatus();
        document.getElementById('sm_holder').innerHTML = r.responseText;
        with (document.getElementById('sitemap').style) {
          display = "block";
          position = "absolute";
          right = 0;
          top = 80;
        }
        document.getElementById('sitemapClose').onclick = function () {
          document.getElementById('sitemap').style.display = "none";
        }
      }
    }
    postData = 'module=Home&action=sitemap&GetSiteMap=now&sugar_body_only=true';
    YAHOO.util.Connect.asyncRequest('POST', 'index.php', callback, postData);
  }
});
function IKEADEBUG() {
  var moduleLinks = document.getElementById('moduleList').getElementsByTagName("a");
  moduleLinkMouseOver = function () {
    var matches = /grouptab_([0-9]+)/i.exec(this.id);
    var tabNum = matches[1];
    var moduleGroups = document.getElementById('subModuleList').getElementsByTagName("span");
    for (var i = 0; i < moduleGroups.length; i++) {
      if (i == tabNum) {
        moduleGroups[i].className = 'selected';
      }
      else {
        moduleGroups[i].className = '';
      }
    }
    var groupList = document.getElementById('moduleList').getElementsByTagName("li");
    var currentGroupItem = tabNum;
    for (var i = 0; i < groupList.length; i++) {
      var aElem = groupList[i].getElementsByTagName("a")[0];
      if (aElem == null) {
        continue;
      }
      var classStarter = 'notC';
      if (aElem.id == "grouptab_" + tabNum) {
        classStarter = 'c';
        currentGroupItem = i;
      }
      var spanTags = groupList[i].getElementsByTagName("span");
      for (var ii = 0; ii < spanTags.length; ii++) {
        if (spanTags[ii].className == null) {
          continue;
        }
        var oldClass = spanTags[ii].className.match(/urrentTab.*/);
        spanTags[ii].className = classStarter + oldClass;
      }
    }
    var menuHandle = moduleGroups[tabNum];
    var parentMenu = groupList[currentGroupItem];
    if (menuHandle && parentMenu) {
      updateSubmenuPosition(menuHandle, parentMenu);
    }
  };
  for (var i = 0; i < moduleLinks.length; i++) {
    moduleLinks[i].onmouseover = moduleLinkMouseOver;
  }
};
function updateSubmenuPosition(menuHandle, parentMenu) {
  var left = '';
  if (left == "") {
    p = parentMenu;
    var left = 0;
    while (p && p.tagName.toUpperCase() != 'BODY') {
      left += p.offsetLeft;
      p = p.offsetParent;
    }
  }
  var bw = checkBrowserWidth();
  if (!parentMenu) {
    return;
  }
  var groupTabLeft = left + (parentMenu.offsetWidth / 2);
  var subTabHalfLength = 0;
  var children = menuHandle.getElementsByTagName('li');
  for (var i = 0; i < children.length; i++) {
    if (children[i].className == 'subTabMore' || children[i].parentNode.className == 'cssmenu') {
      continue;
    }
    subTabHalfLength += parseInt(children[i].offsetWidth);
  }
  if (subTabHalfLength != 0) {
    subTabHalfLength = subTabHalfLength / 2;
  }
  var totalLengthInTheory = subTabHalfLength + groupTabLeft;
  if (subTabHalfLength > 0 && groupTabLeft > 0) {
    if (subTabHalfLength >= groupTabLeft) {
      left = 1;
    } else {
      left = groupTabLeft - subTabHalfLength;
    }
  }
  if (totalLengthInTheory > bw) {
    var differ = totalLengthInTheory - bw;
    left = groupTabLeft - subTabHalfLength - differ - 2;
  }
  if (left >= 0) {
    menuHandle.style.marginLeft = left + 'px';
  }
}
YAHOO.util.Event.onDOMReady(function () {
  if (document.getElementById('subModuleList')) {
    var parentMenu = false;
    var moduleListDom = document.getElementById('moduleList');
    if (moduleListDom != null) {
      var parentTabLis = moduleListDom.getElementsByTagName("li");
      var tabNum = 0;
      for (var ii = 0; ii < parentTabLis.length; ii++) {
        var spans = parentTabLis[ii].getElementsByTagName("span");
        for (var jj = 0; jj < spans.length; jj++) {
          if (spans[jj].className.match(/currentTab.*/)) {
            tabNum = ii;
          }
        }
      }
      var parentMenu = parentTabLis[tabNum];
    }
    var moduleGroups = document.getElementById('subModuleList').getElementsByTagName("span");
    for (var i = 0; i < moduleGroups.length; i++) {
      if (moduleGroups[i].className.match(/selected/)) {
        tabNum = i;
      }
    }
    var menuHandle = moduleGroups[tabNum];
    if (menuHandle && parentMenu) {
      updateSubmenuPosition(menuHandle, parentMenu);
    }
  }
});
SUGAR.themes = SUGAR.namespace("themes");
SUGAR.append(SUGAR.themes, {
  allMenuBars: {}, setModuleTabs: function (html) {
    var el = document.getElementById('ajaxHeader');
    if (el) {
      $('#ajaxHeader').html(html);
      loadSidebar();
      if ($(window).width() < 979) {
        $('#bootstrap-container').removeClass('main');
      }
    }
  }, actionMenu: function () {
    $("ul.clickMenu").each(function (index, node) {
      $(node).sugarActionMenu();
    });
  }, loadModuleList: function () {
    var nodes = YAHOO.util.Selector.query('#moduleList>div'), currMenuBar;
    this.allMenuBars = {};
    for (var i = 0; i < nodes.length; i++) {
      currMenuBar = SUGAR.themes.currMenuBar = new YAHOO.widget.MenuBar(nodes[i].id, {
        autosubmenudisplay: true,
        visible: false,
        hidedelay: 750,
        lazyload: true
      });
      currMenuBar.render();
      this.allMenuBars[nodes[i].id.substr(nodes[i].id.indexOf('_') + 1)] = currMenuBar;
      if (typeof YAHOO.util.Dom.getChildren(nodes[i]) == 'object' && YAHOO.util.Dom.getChildren(nodes[i]).shift().style.display != 'none') {
        oMenuBar = currMenuBar;
      }
    }
    YAHOO.util.Event.onAvailable('subModuleList', IKEADEBUG);
  }, setCurrentTab: function () {
  }
});
YAHOO.util.Event.onDOMReady(SUGAR.themes.loadModuleList, SUGAR.themes, true);


// Custom jQuery for theme

// Script to toggle copyright popup
$("button").click(function () {
  $("#sugarcopy").toggle();

});

var initFooterPopups = function () {
  $("#dialog, #dialog2").dialog({
    autoOpen: false,
    show: {
      effect: "blind",
      duration: 100
    },
    hide: {
      effect: "fade",
      duration: 1000
    }
  });
  $("#powered_by").click(function () {
    $("#dialog").dialog("open");
    $("#overlay").show().css({"opacity": "0.5"});
  });
  $("#admin_options").click(function () {
    $("#dialog2").dialog("open");
  });
};

// Custom JavaScript for copyright pop-ups
$(function () {
  initFooterPopups();
});

// Back to top animation
$('#backtotop').click(function (event) {
  event.preventDefault();
  $('html, body').animate({scrollTop: 0}, 500); // Scroll speed to the top
});

// Tabs jQuery for Admin panel
$(function () {
  var tabs = $("#tabs").tabs();
  tabs.find(".ui-tabs-nav").sortable({
    axis: "x",
    stop: function () {
      tabs.tabs("refresh");
    }
  });
});


// JavaScript fix to remove unrequired classes on smaller screens where sidebar is obsolete
$(window).resize(function () {
  if ($(window).width() < 979) {
    $('#bootstrap-container').removeClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 sidebar main');
  }
  if ($(window).width() > 980 && $('.sidebar').is(':visible')) {
    $('#bootstrap-container').addClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main');
  }
});

// jQuery to toggle sidebar
function loadSidebar() {
  if ($('#sidebar_container').length) {
    $('#buttontoggle').click(function () {
      $('.sidebar').toggle();
      if ($('.sidebar').is(':visible')) {
        $.cookie('sidebartoggle', 'expanded');
        $('#buttontoggle').removeClass('button-toggle-collapsed');
        $('#buttontoggle').addClass('button-toggle-expanded');
        $('#bootstrap-container').addClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2');
        $('footer').removeClass('collapsedSidebar');
        $('footer').addClass('expandedSidebar');
        $('#bootstrap-container').removeClass('collapsedSidebar');
        $('#bootstrap-container').addClass('expandedSidebar');
      }
      if ($('.sidebar').is(':hidden')) {
        $.cookie('sidebartoggle', 'collapsed');
        $('#buttontoggle').removeClass('button-toggle-expanded');
        $('#buttontoggle').addClass('button-toggle-collapsed');
        $('#bootstrap-container').removeClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 col-sm-3 col-md-2 sidebar');
        $('footer').removeClass('expandedSidebar');
        $('footer').addClass('collapsedSidebar');
        $('#bootstrap-container').removeClass('expandedSidebar');
        $('#bootstrap-container').addClass('collapsedSidebar');
      }
    });

    var sidebartoggle = $.cookie('sidebartoggle');
    if (sidebartoggle == 'collapsed') {
      $('.sidebar').hide();
      $('#buttontoggle').removeClass('button-toggle-expanded');
      $('#buttontoggle').addClass('button-toggle-collapsed');
      $('#bootstrap-container').removeClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 col-sm-3 col-md-2 sidebar');
      $('footer').removeClass('expandedSidebar');
      $('footer').addClass('collapsedSidebar');
      $('#bootstrap-container').removeClass('expandedSidebar');
      $('#bootstrap-container').addClass('collapsedSidebar');
    }
    else {
      $('#bootstrap-container').addClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2');
      $('#buttontoggle').removeClass('button-toggle-collapsed');
      $('#buttontoggle').addClass('button-toggle-expanded');
      $('footer').removeClass('collapsedSidebar');
      $('footer').addClass('expandedSidebar');
      $('#bootstrap-container').removeClass('collapsedSidebar');
      $('#bootstrap-container').addClass('expandedSidebar');
    }
  }
}

// Alerts Notification
$(document).ready(function () {
  $('#alert-nav').click(function () {
    $('#alert-nav #alerts').css('display', 'inherit');
  });
});

function selectTab(tab) {
  $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
  $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
};

function changeFirstTab(src) {
  var selected = $(src).attr('id');
  var selectedHtml = $(selected.context).html();
  $('#xstab0').html(selectedHtml);

    var i = $(src).parents('li').index();
    selectTab(parseInt(i));
    return true;
}
// End of custom jQuery


// fix for tab navigation on user profile for SuiteP theme

var getParameterByName = function (name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}
var isUserProfilePage = function () {
  var module = getParameterByName('module');
  if (!module) {
    module = $('#EditView_tabs').closest('form#EditView').find('input[name="module"]').val();
  }
  if (!module) {
    if (typeof module_sugar_grp1 !== "undefined") {
      module = module_sugar_grp1;
    }
  }
  return module == 'Users';
};

var isEditViewPage = function () {
  var action = getParameterByName('action');
  if (!action) {
    action = $('#EditView_tabs').closest('form#EditView').find('input[name="page"]').val();
  }
  return action == 'EditView';
};

var isDetailViewPage = function () {
  var action = getParameterByName('action');
  if (!action) {
    action = action_sugar_grp1;
  }
  return action == 'DetailView';
};

var refreshListViewCheckbox = function (e) {
  $(e).removeClass('glyphicon-check');
  $(e).removeClass('glyphicon-unchecked');
  if ($(e).next().prop('checked')) {
    $(e).addClass('glyphicon-check');
  }
  else {
    $(e).addClass('glyphicon-unchecked');
  }
  $(e).removeClass('disabled')
  if ($(e).next().prop('disabled')) {
    $(e).addClass('disabled')
  }
};

$(function () {
  // Fix for footer position
  if ($('#bootstrap-container footer').length > 0) {
    var clazz = $('#bootstrap-container footer').attr('class');
    $('body').append('<footer class="' + clazz + '">' + $('#bootstrap-container footer').html() + '</footer>');
    $('#bootstrap-container footer').remove();
    initFooterPopups();
  }



  var hideEmptyFormCellsOnTablet = function () {
    if ($(window).width() <= 767) {
      $('div#content div#pagecontent form#EditView div.edit.view table tbody tr td').each(function (i, e) {
        $(e).find('slot').each(function (i, e) {
          if ($(e).html().trim() == '&nbsp;') {
            $(e).html('&nbsp;');
          }
        });
        if ($(e).html().trim() == '<span>&nbsp;</span>') {
          $(e).addClass('hidden');
          $(e).addClass('hiddenOnTablet');
        }
      });
    }
    else {
      $('div#content div#pagecontent form#EditView div.edit.view table tbody tr td.hidden.hiddenOnTablet').each(function (i, e) {
        $(e).removeClass('hidden');
        $(e).removeClass('hiddenOnTablet');
      });
    }
  }

  $(window).click(function () {
    hideEmptyFormCellsOnTablet();
    setTimeout(function () {
      hideEmptyFormCellsOnTablet();
    }, 500);
  });

  $(window).resize(function () {
    hideEmptyFormCellsOnTablet();
  });

  $(window).load(function () {
    hideEmptyFormCellsOnTablet();
  });

  $(document).ready(function () {
    hideEmptyFormCellsOnTablet();
  });

  setTimeout(function () {
    hideEmptyFormCellsOnTablet();
  }, 1500);

  var listViewCheckboxInit = function () {
    var checkboxesInitialized = false;
    var checkboxesInitializeInterval = false;
    var checkboxesCountdown = 100;
    var initializeBootstrapCheckboxes = function () {
      if (!checkboxesInitialized) {
        if ($('.glyphicon.bootstrap-checkbox').length == 0) {
          if (!checkboxesInitializeInterval) {
            checkboxesInitializeInterval = setInterval(function () {
              checkboxesCountdown--;
              if (checkboxesCountdown <= 0) {
                clearInterval(checkboxesInitializeInterval);
                return;
              }
              initializeBootstrapCheckboxes();
            }, 100);
          }
        } else {
          $('.glyphicon.bootstrap-checkbox').each(function (i, e) {
            $(e).removeClass('hidden');
            $(e).next().hide();
            refreshListViewCheckbox(e);
            if (!$(e).hasClass('initialized-checkbox')) {
              $(e).click(function () {
                $(this).next().click();
                refreshListViewCheckbox($(this));
              });
              $(e).addClass('initialized-checkbox');
            }
          });

          $('#selectLink > li > ul > li > a, #selectLinkTop > li > ul > li > a, #selectLinkBottom > li > ul > li > a').click(function (e) {
            e.preventDefault();
            $('.glyphicon.bootstrap-checkbox').each(function (i, e) {
              refreshListViewCheckbox(e);
            });
          });

          checkboxesInitialized = true;
          clearInterval(checkboxesInitializeInterval);
          checkboxesInitializeInterval = false;
        }
      }
    };
    initializeBootstrapCheckboxes();
  };
  setInterval(function () {
    listViewCheckboxInit();
  }, 100);

});
// bootstrap multiselect
!function(root,factory){"function"==typeof define&&define.amd&&"function"==typeof require&&"function"==typeof require.specified&&require.specified("knockout")?define(["jquery","knockout"],factory):factory(root.jQuery,root.ko)}(this,(function($,ko){"use strict";function forEach(array,callback){for(var index=0;index<array.length;++index)callback(array[index],index)}function Multiselect(select,options){this.$select=$(select),this.options=this.mergeOptions($.extend({},options,this.$select.data())),this.$select.attr("data-placeholder")&&(this.options.nonSelectedText=this.$select.data("placeholder")),this.originalOptions=this.$select.clone()[0].options,this.query="",this.searchTimeout=null,this.lastToggledInput=null,this.options.multiple="multiple"===this.$select.attr("multiple"),this.options.onChange=$.proxy(this.options.onChange,this),this.options.onSelectAll=$.proxy(this.options.onSelectAll,this),this.options.onDeselectAll=$.proxy(this.options.onDeselectAll,this),this.options.onDropdownShow=$.proxy(this.options.onDropdownShow,this),this.options.onDropdownHide=$.proxy(this.options.onDropdownHide,this),this.options.onDropdownShown=$.proxy(this.options.onDropdownShown,this),this.options.onDropdownHidden=$.proxy(this.options.onDropdownHidden,this),this.options.onInitialized=$.proxy(this.options.onInitialized,this),this.options.onFiltering=$.proxy(this.options.onFiltering,this),this.buildContainer(),this.buildButton(),this.buildDropdown(),this.buildReset(),this.buildSelectAll(),this.buildDropdownOptions(),this.buildFilter(),this.updateButtonText(),this.updateSelectAll(!0),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups(),this.options.wasDisabled=this.$select.prop("disabled"),this.options.disableIfEmpty&&$("option",this.$select).length<=0&&this.disable(),this.$select.wrap('<span class="multiselect-native-select" />').after(this.$container),this.options.onInitialized(this.$select,this.$container)}void 0!==ko&&ko.bindingHandlers&&!ko.bindingHandlers.multiselect&&(ko.bindingHandlers.multiselect={after:["options","value","selectedOptions","enable","disable"],init:function(element,valueAccessor,allBindings,viewModel,bindingContext){var $element=$(element),config=ko.toJS(valueAccessor());if($element.multiselect(config),allBindings.has("options")){var options=allBindings.get("options");ko.isObservable(options)&&ko.computed({read:function(){options(),setTimeout((function(){var ms=$element.data("multiselect");ms&&ms.updateOriginalOptions(),$element.multiselect("rebuild")}),1)},disposeWhenNodeIsRemoved:element})}if(allBindings.has("value")){var value=allBindings.get("value");ko.isObservable(value)&&ko.computed({read:function(){value(),setTimeout((function(){$element.multiselect("refresh")}),1)},disposeWhenNodeIsRemoved:element}).extend({rateLimit:100,notifyWhenChangesStop:!0})}if(allBindings.has("selectedOptions")){var selectedOptions=allBindings.get("selectedOptions");ko.isObservable(selectedOptions)&&ko.computed({read:function(){selectedOptions(),setTimeout((function(){$element.multiselect("refresh")}),1)},disposeWhenNodeIsRemoved:element}).extend({rateLimit:100,notifyWhenChangesStop:!0})}var setEnabled=function(enable){setTimeout((function(){enable?$element.multiselect("enable"):$element.multiselect("disable")}))};if(allBindings.has("enable")){var enable=allBindings.get("enable");ko.isObservable(enable)?ko.computed({read:function(){setEnabled(enable())},disposeWhenNodeIsRemoved:element}).extend({rateLimit:100,notifyWhenChangesStop:!0}):setEnabled(enable)}if(allBindings.has("disable")){var disable=allBindings.get("disable");ko.isObservable(disable)?ko.computed({read:function(){setEnabled(!disable())},disposeWhenNodeIsRemoved:element}).extend({rateLimit:100,notifyWhenChangesStop:!0}):setEnabled(!disable)}ko.utils.domNodeDisposal.addDisposeCallback(element,(function(){$element.multiselect("destroy")}))},update:function(element,valueAccessor,allBindings,viewModel,bindingContext){var $element=$(element),config=ko.toJS(valueAccessor());$element.multiselect("setOptions",config),$element.multiselect("rebuild")}}),Multiselect.prototype={defaults:{buttonText:function(options,select){if(this.disabledText.length>0&&(select.prop("disabled")||0==options.length&&this.disableIfEmpty))return this.disabledText;if(0===options.length)return this.nonSelectedText;if(this.allSelectedText&&options.length===$("option",$(select)).length&&1!==$("option",$(select)).length&&this.multiple)return this.selectAllNumber?this.allSelectedText+" ("+options.length+")":this.allSelectedText;if(0!=this.numberDisplayed&&options.length>this.numberDisplayed)return options.length+" "+this.nSelectedText;var selected="",delimiter=this.delimiterText;return options.each((function(){var label=void 0!==$(this).attr("label")?$(this).attr("label"):$(this).text();selected+=label+delimiter})),selected.substr(0,selected.length-this.delimiterText.length)},buttonTitle:function(options,select){if(0===options.length)return this.nonSelectedText;var selected="",delimiter=this.delimiterText;return options.each((function(){var label=void 0!==$(this).attr("label")?$(this).attr("label"):$(this).text();selected+=label+delimiter})),selected.substr(0,selected.length-this.delimiterText.length)},checkboxName:function(option){return!1},optionLabel:function(element){return $(element).attr("label")||$(element).text()},optionClass:function(element){return $(element).attr("class")||""},onChange:function(option,checked){},onDropdownShow:function(event){},onDropdownHide:function(event){},onDropdownShown:function(event){},onDropdownHidden:function(event){},onSelectAll:function(){},onDeselectAll:function(){},onInitialized:function($select,$container){},onFiltering:function($filter){},enableHTML:!1,buttonClass:"custom-select",inheritClass:!1,buttonWidth:"auto",buttonContainer:'<div class="btn-group" />',dropRight:!1,dropUp:!1,selectedClass:"active",maxHeight:!1,includeSelectAllOption:!1,includeSelectAllIfMoreThan:0,selectAllText:" Select all",selectAllValue:"multiselect-all",selectAllName:!1,selectAllNumber:!0,selectAllJustVisible:!0,enableFiltering:!1,enableCaseInsensitiveFiltering:!1,enableFullValueFiltering:!1,enableClickableOptGroups:!1,enableCollapsibleOptGroups:!1,collapseOptGroupsByDefault:!1,filterPlaceholder:"Search",filterBehavior:"text",includeFilterClearBtn:!0,preventInputChangeEvent:!1,nonSelectedText:"None selected",nSelectedText:"selected",allSelectedText:"All selected",numberDisplayed:3,disableIfEmpty:!1,disabledText:"",delimiterText:", ",includeResetOption:!1,includeResetDivider:!1,resetText:"Reset",templates:{button:'<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span></button>',popupContainer:'<div class="multiselect-container dropdown-menu"></div>',filter:'<div class="multiselect-filter"><div class="input-group input-group-sm p-1"><div class="input-group-prepend"><i class="input-group-text fas fa-search"></i></div><input class="form-control multiselect-search" type="text" /></div></div>',filterClearBtn:'<div class="input-group-append"><button class="multiselect-clear-filter input-group-text" type="button"><i class="fas fa-times"></i></button></div>',option:'<button class="multiselect-option dropdown-item"></button>',divider:'<div class="dropdown-divider"></div>',optionGroup:'<button class="multiselect-group dropdown-item"></button>',resetButton:'<div class="multiselect-reset text-center p-2"><button class="btn btn-sm btn-block btn-outline-secondary"></button></div>'}},constructor:Multiselect,buildContainer:function(){this.$container=$(this.options.buttonContainer),this.$container.on("show.bs.dropdown",this.options.onDropdownShow),this.$container.on("hide.bs.dropdown",this.options.onDropdownHide),this.$container.on("shown.bs.dropdown",this.options.onDropdownShown),this.$container.on("hidden.bs.dropdown",this.options.onDropdownHidden)},buildButton:function(){this.$button=$(this.options.templates.button).addClass(this.options.buttonClass),this.$select.attr("class")&&this.options.inheritClass&&this.$button.addClass(this.$select.attr("class")),this.$select.prop("disabled")?this.disable():this.enable(),this.options.buttonWidth&&"auto"!==this.options.buttonWidth&&(this.$button.css({width:"100%",overflow:"hidden","text-overflow":"ellipsis"}),this.$container.css({width:this.options.buttonWidth}));var tabindex=this.$select.attr("tabindex");tabindex&&this.$button.attr("tabindex",tabindex),this.$container.prepend(this.$button)},buildDropdown:function(){this.$popupContainer=$(this.options.templates.popupContainer),this.options.dropRight?this.$container.addClass("dropright"):this.options.dropUp&&this.$container.addClass("dropup"),this.options.maxHeight&&this.$popupContainer.css({"max-height":this.options.maxHeight+"px","overflow-y":"auto","overflow-x":"hidden"}),this.$popupContainer.on("touchstart click",(function(e){e.stopPropagation()})),this.$container.append(this.$popupContainer)},buildDropdownOptions:function(){this.$select.children().each($.proxy((function(index,element){var $element=$(element),tag=$element.prop("tagName").toLowerCase();$element.prop("value")!==this.options.selectAllValue&&("optgroup"===tag?this.createOptgroup(element):"option"===tag&&("divider"===$element.data("role")?this.createDivider():this.createOptionValue(element)))}),this)),$(this.$popupContainer).off("change",'> *:not(.multiselect-group) input[type="checkbox"], > *:not(.multiselect-group) input[type="radio"]'),$(this.$popupContainer).on("change",'> *:not(.multiselect-group) input[type="checkbox"], > *:not(.multiselect-group) input[type="radio"]',$.proxy((function(event){var $target=$(event.target),checked=$target.prop("checked")||!1,isSelectAllOption=$target.val()===this.options.selectAllValue;this.options.selectedClass&&(checked?$target.closest(".multiselect-option").addClass(this.options.selectedClass):$target.closest(".multiselect-option").removeClass(this.options.selectedClass));var value=$target.val(),$option=this.getOptionByValue(value),$optionsNotThis=$("option",this.$select).not($option),$checkboxesNotThis=$("input",this.$container).not($target);if(isSelectAllOption?checked?this.selectAll(this.options.selectAllJustVisible,!0):this.deselectAll(this.options.selectAllJustVisible,!0):(checked?($option.prop("selected",!0),this.options.multiple?$option.prop("selected",!0):(this.options.selectedClass&&$($checkboxesNotThis).closest(".dropdown-item").removeClass(this.options.selectedClass),$($checkboxesNotThis).prop("checked",!1),$optionsNotThis.prop("selected",!1),this.$button.click()),"active"===this.options.selectedClass&&$optionsNotThis.closest(".dropdown-item").css("outline","")):$option.prop("selected",!1),this.options.onChange($option,checked),this.updateSelectAll(),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups()),this.$select.change(),this.updateButtonText(),this.options.preventInputChangeEvent)return!1}),this)),$(".multiselect-option",this.$popupContainer).off("mousedown"),$(".multiselect-option",this.$popupContainer).on("mousedown",(function(e){if(e.shiftKey)return!1})),$(this.$popupContainer).off("touchstart click",".multiselect-option, .multiselect-all, .multiselect-group"),$(this.$popupContainer).on("touchstart click",".multiselect-option, .multiselect-all, .multiselect-group",$.proxy((function(event){event.stopPropagation();var $target=$(event.target),$input;if(event.shiftKey&&this.options.multiple){$target.is("input")||(event.preventDefault(),($target=$target.closest(".multiselect-option").find("input")).prop("checked",!$target.prop("checked")));var checked=$target.prop("checked")||!1;if(null!==this.lastToggledInput&&this.lastToggledInput!==$target){var from=this.$popupContainer.find(".multiselect-option:visible").index($target.closest(".multiselect-option")),to=this.$popupContainer.find(".multiselect-option:visible").index(this.lastToggledInput.closest(".multiselect-option"));if(from>to){var tmp=to;to=from,from=tmp}++to;var range=this.$popupContainer.find(".multiselect-option:not(.multiselect-filter-hidden)").slice(from,to).find("input");range.prop("checked",checked),this.options.selectedClass&&range.closest(".multiselect-option").toggleClass(this.options.selectedClass,checked);for(var i=0,j=range.length;i<j;i++){var $checkbox=$(range[i]),$option;this.getOptionByValue($checkbox.val()).prop("selected",checked)}}$target.trigger("change")}else if(!$target.is("input")){var $checkbox;if(($checkbox=$target.closest(".multiselect-option, .multiselect-all").find(".form-check-input")).length>0)$checkbox.prop("checked",!$checkbox.prop("checked")),$checkbox.change();else if(this.options.enableClickableOptGroups&&this.options.multiple&&!$target.hasClass("caret-container")){var groupItem=$target;groupItem.hasClass("multiselect-group")||(groupItem=$target.closest(".multiselect-group")),($checkbox=groupItem.find(".form-check-input")).length>0&&($checkbox.prop("checked",!$checkbox.prop("checked")),$checkbox.change())}event.preventDefault()}$target.closest(".multiselect-option").find("input[type='checkbox'], input[type='radio']").length>0?this.lastToggledInput=$target:this.lastToggledInput=null,$target.blur()}),this)),this.$container.off("keydown.multiselect").on("keydown.multiselect",$.proxy((function(event){if(!$('input[type="text"]',this.$container).is(":focus"))if(9===event.keyCode&&this.$container.hasClass("show"))this.$button.click();else{var $items=$(this.$container).find(".multiselect-option:not(.disabled), .multiselect-group:not(.disabled), .multiselect-all").filter(":visible");if(!$items.length)return;var index=$items.index($items.filter(":focus")),$current=$items.eq(index);if(32===event.keyCode){var $checkbox=$current.find("input");$checkbox.prop("checked",!$checkbox.prop("checked")),$checkbox.change(),event.preventDefault()}13===event.keyCode&&setTimeout((function(){$current.focus()}),0)}}),this)),this.options.enableClickableOptGroups&&this.options.multiple&&($(".multiselect-group input",this.$popupContainer).off("change"),$(".multiselect-group input",this.$popupContainer).on("change",$.proxy((function(event){event.stopPropagation();var $target,checked=$(event.target).prop("checked")||!1,$item=$(event.target).closest(".dropdown-item"),$group,$inputs=$item.nextUntil(".multiselect-group").not(".multiselect-filter-hidden").not(".disabled").find("input"),$options=[];this.options.selectedClass&&(checked?$item.addClass(this.options.selectedClass):$item.removeClass(this.options.selectedClass)),$.each($inputs,$.proxy((function(index,input){var $input=$(input),value=$input.val(),$option=this.getOptionByValue(value);checked?($input.prop("checked",!0),$input.closest(".dropdown-item").addClass(this.options.selectedClass),$option.prop("selected",!0)):($input.prop("checked",!1),$input.closest(".dropdown-item").removeClass(this.options.selectedClass),$option.prop("selected",!1)),$options.push(this.getOptionByValue(value))}),this)),this.options.onChange($options,checked),this.$select.change(),this.updateButtonText(),this.updateSelectAll()}),this))),this.options.enableCollapsibleOptGroups&&this.options.multiple&&($(".multiselect-group .caret-container",this.$popupContainer).off("click"),$(".multiselect-group .caret-container",this.$popupContainer).on("click",$.proxy((function(event){var $group,$inputs=$(event.target).closest(".multiselect-group").nextUntil(".multiselect-group").not(".multiselect-filter-hidden"),visible=!0;$inputs.each((function(){visible=visible&&!$(this).hasClass("multiselect-collapsible-hidden")})),visible?$inputs.hide().addClass("multiselect-collapsible-hidden"):$inputs.show().removeClass("multiselect-collapsible-hidden")}),this)))},createCheckbox:function($item,label,name,value,title,inputType){var $wrapper=$("<span />");if($wrapper.addClass("form-check"),this.options.enableHTML&&$(label).length>0)$wrapper.append($(label));else{var $checkboxLabel=$('<label class="form-check-label" />');$checkboxLabel.text(label),$wrapper.append($checkboxLabel)}var $checkbox=$('<input class="form-check-input"/>').attr("type",inputType);return $checkbox.val(value),$wrapper.prepend($checkbox),name&&$checkbox.attr("name",name),$item.prepend($wrapper),$item.attr("title",title||label),$checkbox},createOptionValue:function(element){var $element=$(element);$element.is(":selected")&&$element.prop("selected",!0);var label=this.options.optionLabel(element),classes=this.options.optionClass(element),value=$element.val(),inputType=this.options.multiple?"checkbox":"radio",title=$element.attr("title"),$option=$(this.options.templates.option);$option.addClass(classes),this.options.collapseOptGroupsByDefault&&"optgroup"===$(element).parent().prop("tagName").toLowerCase()&&($option.addClass("multiselect-collapsible-hidden"),$option.hide());var name=this.options.checkboxName($element),$checkbox=this.createCheckbox($option,label,name,value,title,inputType),selected=$element.prop("selected")||!1;value===this.options.selectAllValue&&($option.addClass("multiselect-all"),$option.removeClass("multiselect-option"),$checkbox.parent().parent().addClass("multiselect-all")),this.$popupContainer.append($option),$element.is(":disabled")&&$checkbox.attr("disabled","disabled").prop("disabled",!0).closest(".dropdown-item").addClass("disabled"),$checkbox.prop("checked",selected),selected&&this.options.selectedClass&&$checkbox.closest(".dropdown-item").addClass(this.options.selectedClass)},createDivider:function(element){var $divider=$(this.options.templates.divider);this.$popupContainer.append($divider)},createOptgroup:function(group){var $group=$(group),label=$group.attr("label"),value=$group.attr("value"),title=$group.attr("title"),$groupOption=$("<span class='multiselect-group dropdown-item-text'></span>");if(this.options.enableClickableOptGroups&&this.options.multiple){$groupOption=$(this.options.templates.optionGroup);var $checkbox=this.createCheckbox($groupOption,label,null,value,title,"checkbox")}else this.options.enableHTML?$groupOption.html(" "+label):$groupOption.text(" "+label);var classes=this.options.optionClass(group);$groupOption.addClass(classes),this.options.enableCollapsibleOptGroups&&this.options.multiple&&($groupOption.find(".form-check").addClass("d-inline-block"),$groupOption.append('<span class="caret-container dropdown-toggle pl-1"></span>')),$group.is(":disabled")&&$groupOption.addClass("disabled"),this.$popupContainer.append($groupOption),$("option",group).each($.proxy((function($,group){this.createOptionValue(group)}),this))},buildReset:function(){if(this.options.includeResetOption){if(this.options.includeResetDivider){var divider=$(this.options.templates.divider);divider.addClass("mt-0"),this.$popupContainer.prepend(divider)}var $resetButton=$(this.options.templates.resetButton);this.options.enableHTML?$("button",$resetButton).html(this.options.resetText):$("button",$resetButton).text(this.options.resetText),$("button",$resetButton).click($.proxy((function(){this.clearSelection()}),this)),this.$popupContainer.prepend($resetButton)}},buildSelectAll:function(){var alreadyHasSelectAll;if("number"==typeof this.options.selectAllValue&&(this.options.selectAllValue=this.options.selectAllValue.toString()),!this.hasSelectAll()&&this.options.includeSelectAllOption&&this.options.multiple&&$("option",this.$select).length>this.options.includeSelectAllIfMoreThan){this.options.includeSelectAllDivider&&this.$popupContainer.prepend($(this.options.templates.divider));var $option=$(this.options.templates.li||this.options.templates.option),$checkbox=this.createCheckbox($option,this.options.selectAllText,this.options.selectAllName,this.options.selectAllValue,this.options.selectAllText,"checkbox");$option.addClass("multiselect-all"),$option.removeClass("multiselect-option"),$option.find(".form-check-label").addClass("font-weight-bold"),this.$popupContainer.prepend($option),$checkbox.prop("checked",!1)}},buildFilter:function(){if(this.options.enableFiltering||this.options.enableCaseInsensitiveFiltering){var enableFilterLength=Math.max(this.options.enableFiltering,this.options.enableCaseInsensitiveFiltering);if(this.$select.find("option").length>=enableFilterLength){if(this.$filter=$(this.options.templates.filter),$("input",this.$filter).attr("placeholder",this.options.filterPlaceholder),this.options.includeFilterClearBtn){var clearBtn=$(this.options.templates.filterClearBtn);clearBtn.on("click",$.proxy((function(event){clearTimeout(this.searchTimeout),this.query="",this.$filter.find(".multiselect-search").val(""),$(".dropdown-item",this.$popupContainer).show().removeClass("multiselect-filter-hidden"),this.updateSelectAll(),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups()}),this)),this.$filter.find(".input-group").append(clearBtn)}this.$popupContainer.prepend(this.$filter),this.$filter.val(this.query).on("click",(function(event){event.stopPropagation()})).on("input keydown",$.proxy((function(event){13===event.which&&event.preventDefault(),clearTimeout(this.searchTimeout),this.searchTimeout=this.asyncFunction($.proxy((function(){var currentGroup,currentGroupVisible;this.query!==event.target.value&&(this.query=event.target.value,$.each($(".multiselect-option, .multiselect-group",this.$popupContainer),$.proxy((function(index,element){var value=$("input",element).length>0?$("input",element).val():"",text=$(".form-check-label",element).text(),filterCandidate="";if("text"===this.options.filterBehavior?filterCandidate=text:"value"===this.options.filterBehavior?filterCandidate=value:"both"===this.options.filterBehavior&&(filterCandidate=text+"\n"+value),value!==this.options.selectAllValue&&text){var showElement=!1;if(this.options.enableCaseInsensitiveFiltering&&(filterCandidate=filterCandidate.toLowerCase(),this.query=this.query.toLowerCase()),this.options.enableFullValueFiltering&&"both"!==this.options.filterBehavior){var valueToMatch=filterCandidate.trim().substring(0,this.query.length);this.query.indexOf(valueToMatch)>-1&&(showElement=!0)}else filterCandidate.indexOf(this.query)>-1&&(showElement=!0);showElement||($(element).css("display","none"),$(element).addClass("multiselect-filter-hidden")),showElement&&($(element).css("display","block"),$(element).removeClass("multiselect-filter-hidden")),$(element).hasClass("multiselect-group")?(currentGroup=element,currentGroupVisible=showElement):(showElement&&$(currentGroup).show().removeClass("multiselect-filter-hidden"),!showElement&&currentGroupVisible&&$(element).show().removeClass("multiselect-filter-hidden"))}}),this)));this.updateSelectAll(),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups(),this.options.onFiltering(event.target)}),this),300,this)}),this))}}},destroy:function(){this.$container.remove(),this.$select.show(),this.$select.prop("disabled",this.options.wasDisabled),this.$select.data("multiselect",null)},refresh:function(){var inputs={};$(".multiselect-option input",this.$popupContainer).each((function(){inputs[$(this).val()]=$(this)})),$("option",this.$select).each($.proxy((function(index,element){var $elem=$(element),$input=inputs[$(element).val()];$elem.is(":selected")?($input.prop("checked",!0),this.options.selectedClass&&$input.closest(".multiselect-option").addClass(this.options.selectedClass)):($input.prop("checked",!1),this.options.selectedClass&&$input.closest(".multiselect-option").removeClass(this.options.selectedClass)),$elem.is(":disabled")?$input.attr("disabled","disabled").prop("disabled",!0).closest(".multiselect-option").addClass("disabled"):$input.prop("disabled",!1).closest(".multiselect-option").removeClass("disabled")}),this)),this.updateButtonText(),this.updateSelectAll(),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups()},select:function(selectValues,triggerOnChange){$.isArray(selectValues)||(selectValues=[selectValues]);for(var i=0;i<selectValues.length;i++){var value=selectValues[i];if(null!=value){var $option=this.getOptionByValue(value),$checkbox=this.getInputByValue(value);void 0!==$option&&void 0!==$checkbox&&(this.options.multiple||this.deselectAll(!1),this.options.selectedClass&&$checkbox.closest(".dropdown-item").addClass(this.options.selectedClass),$checkbox.prop("checked",!0),$option.prop("selected",!0),triggerOnChange&&this.options.onChange($option,!0))}}this.updateButtonText(),this.updateSelectAll(),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups()},clearSelection:function(){this.deselectAll(!1),this.updateButtonText(),this.updateSelectAll(),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups()},deselect:function(deselectValues,triggerOnChange){$.isArray(deselectValues)||(deselectValues=[deselectValues]);for(var i=0;i<deselectValues.length;i++){var value=deselectValues[i];if(null!=value){var $option=this.getOptionByValue(value),$checkbox=this.getInputByValue(value);void 0!==$option&&void 0!==$checkbox&&(this.options.selectedClass&&$checkbox.closest(".dropdown-item").removeClass(this.options.selectedClass),$checkbox.prop("checked",!1),$option.prop("selected",!1),triggerOnChange&&this.options.onChange($option,!1))}}this.updateButtonText(),this.updateSelectAll(),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups()},selectAll:function(justVisible,triggerOnSelectAll){var justVisible=void 0===justVisible||justVisible,allOptions=$(".multiselect-option:not(.disabled)",this.$popupContainer),visibleOptions=$(".multiselect-option:not(.disabled):not(.multiselect-filter-hidden):not(.multiselect-collapisble-hidden)",this.$popupContainer).filter(":visible");justVisible?($("input:enabled",visibleOptions).prop("checked",!0),visibleOptions.addClass(this.options.selectedClass),$("input:enabled",visibleOptions).each($.proxy((function(index,element){var value=$(element).val(),option=this.getOptionByValue(value);$(option).prop("selected",!0)}),this))):($("input:enabled",allOptions).prop("checked",!0),allOptions.addClass(this.options.selectedClass),$("input:enabled",allOptions).each($.proxy((function(index,element){var value=$(element).val(),option=this.getOptionByValue(value);$(option).prop("selected",!0)}),this))),$('.multiselect-option input[value="'+this.options.selectAllValue+'"]',this.$popupContainer).prop("checked",!0),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups(),this.updateButtonText(),this.updateSelectAll(),triggerOnSelectAll&&this.options.onSelectAll()},deselectAll:function(justVisible,triggerOnDeselectAll){var justVisible=void 0===justVisible||justVisible,allOptions=$(".multiselect-option:not(.disabled):not(.multiselect-group)",this.$popupContainer),visibleOptions=$(".multiselect-option:not(.disabled):not(.multiselect-filter-hidden):not(.multiselect-collapisble-hidden)",this.$popupContainer).filter(":visible");justVisible?($('input[type="checkbox"]:enabled',visibleOptions).prop("checked",!1),visibleOptions.removeClass(this.options.selectedClass),$('input[type="checkbox"]:enabled',visibleOptions).each($.proxy((function(index,element){var value=$(element).val(),option=this.getOptionByValue(value);$(option).prop("selected",!1)}),this))):($('input[type="checkbox"]:enabled',allOptions).prop("checked",!1),allOptions.removeClass(this.options.selectedClass),$('input[type="checkbox"]:enabled',allOptions).each($.proxy((function(index,element){var value=$(element).val(),option=this.getOptionByValue(value);$(option).prop("selected",!1)}),this))),$('.multiselect-all input[value="'+this.options.selectAllValue+'"]',this.$popupContainer).prop("checked",!1),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups(),this.updateButtonText(),this.updateSelectAll(),triggerOnDeselectAll&&this.options.onDeselectAll()},rebuild:function(){this.$popupContainer.html(""),this.options.multiple="multiple"===this.$select.attr("multiple"),this.buildSelectAll(),this.buildDropdownOptions(),this.buildFilter(),this.updateButtonText(),this.updateSelectAll(!0),this.options.enableClickableOptGroups&&this.options.multiple&&this.updateOptGroups(),this.options.disableIfEmpty&&$("option",this.$select).length<=0?this.disable():this.enable(),this.options.dropRight?this.$container.addClass("dropright"):this.options.dropUp&&this.$container.addClass("dropup")},dataprovider:function(dataprovider){var groupCounter=0,$select=this.$select.empty();$.each(dataprovider,(function(index,option){var $tag;if($.isArray(option.children))groupCounter++,$tag=$("<optgroup/>").attr({label:option.label||"Group "+groupCounter,disabled:!!option.disabled,value:option.value}),forEach(option.children,(function(subOption){var attributes={value:subOption.value,label:subOption.label||subOption.value,title:subOption.title,selected:!!subOption.selected,disabled:!!subOption.disabled};for(var key in subOption.attributes)attributes["data-"+key]=subOption.attributes[key];$tag.append($("<option/>").attr(attributes))}));else{var attributes={value:option.value,label:option.label||option.value,title:option.title,class:option.class,selected:!!option.selected,disabled:!!option.disabled};for(var key in option.attributes)attributes["data-"+key]=option.attributes[key];($tag=$("<option/>").attr(attributes)).text(option.label||option.value)}$select.append($tag)})),this.rebuild()},enable:function(){this.$select.prop("disabled",!1),this.$button.prop("disabled",!1).removeClass("disabled")},disable:function(){this.$select.prop("disabled",!0),this.$button.prop("disabled",!0).addClass("disabled")},setOptions:function(options){this.options=this.mergeOptions(options)},mergeOptions:function(options){return $.extend(!0,{},this.defaults,this.options,options)},hasSelectAll:function(){return $(".multiselect-all",this.$popupContainer).length>0},updateOptGroups:function(){var $groups=$(".multiselect-group",this.$popupContainer),selectedClass=this.options.selectedClass;$groups.each((function(){var $options=$(this).nextUntil(".multiselect-group").not(".multiselect-filter-hidden").not(".disabled"),checked=!0;$options.each((function(){var $input;$("input",this).prop("checked")||(checked=!1)})),selectedClass&&(checked?$(this).addClass(selectedClass):$(this).removeClass(selectedClass)),$("input",this).prop("checked",checked)}))},updateSelectAll:function(notTriggerOnSelectAll){if(this.hasSelectAll()){var allBoxes=$(".multiselect-option:not(.multiselect-filter-hidden):not(.multiselect-group):not(.disabled) input:enabled",this.$popupContainer),allBoxesLength=allBoxes.length,checkedBoxesLength=allBoxes.filter(":checked").length,selectAllItem=$(".multiselect-all",this.$popupContainer),selectAllInput=selectAllItem.find("input");checkedBoxesLength>0&&checkedBoxesLength===allBoxesLength?(selectAllInput.prop("checked",!0),selectAllItem.addClass(this.options.selectedClass)):(selectAllInput.prop("checked",!1),selectAllItem.removeClass(this.options.selectedClass))}},updateButtonText:function(){var options=this.getSelected();this.options.enableHTML?$(".multiselect .multiselect-selected-text",this.$container).html(this.options.buttonText(options,this.$select)):$(".multiselect .multiselect-selected-text",this.$container).text(this.options.buttonText(options,this.$select)),$(".multiselect",this.$container).attr("title",this.options.buttonTitle(options,this.$select))},getSelected:function(){return $("option",this.$select).filter(":selected")},getOptionByValue:function(value){for(var options=$("option",this.$select),valueToCompare=value.toString(),i=0;i<options.length;i+=1){var option=options[i];if(option.value===valueToCompare)return $(option)}},getInputByValue:function(value){for(var checkboxes=$(".multiselect-option input:not(.multiselect-search)",this.$popupContainer),valueToCompare=value.toString(),i=0;i<checkboxes.length;i+=1){var checkbox=checkboxes[i];if(checkbox.value===valueToCompare)return $(checkbox)}},updateOriginalOptions:function(){this.originalOptions=this.$select.clone()[0].options},asyncFunction:function(callback,timeout,self){var args=Array.prototype.slice.call(arguments,3);return setTimeout((function(){callback.apply(self||window,args)}),timeout)},setAllSelectedText:function(allSelectedText){this.options.allSelectedText=allSelectedText,this.updateButtonText()}},$.fn.multiselect=function(option,parameter,extraOptions){return this.each((function(){var data=$(this).data("multiselect"),options;data||(data=new Multiselect(this,"object"==typeof option&&option),$(this).data("multiselect",data)),"string"==typeof option&&(data[option](parameter,extraOptions),"destroy"===option&&$(this).data("multiselect",!1))}))},$.fn.multiselect.Constructor=Multiselect,$((function(){$("select[data-role=multiselect]").multiselect()}))}));