jQuery(function(t){t("#namenewlist").attr("disabled","disabled"),t("#blocknewlist").hide(),t("#namenewlist").focus(function(){this.value==this.defaultValue&&(this.value="")}).blur(function(){this.value.length||(this.value=this.defaultValue)}),t("#list0").click(function(){this.checked?(t("#namenewlist").removeAttr("disabled"),t("#blocknewlist").fadeIn().prev().find("span").hide()):(t("#namenewlist").attr("disabled","disabled"),t("#blocknewlist").fadeOut().prev().find("span").show())}),t(".create_extra").change(function(){var e=t(this).attr("id").replace("column-match-","column-match-date-wrap-");-1!=this.value.indexOf("new_field|date")?(t(t(this).attr("class").split(" ")).each(function(){""!==this&&-1!=this.indexOf("row-")&&t("span."+this).fadeIn()}),t("#"+e).fadeIn()):null!=t("#"+e)&&(t(t(this).attr("class").split(" ")).each(function(){""!==this&&-1!=this.indexOf("row-")&&t("span."+this).fadeOut()}),t("#"+e).fadeOut())}),jQuery(".match-dropdown select").matchColumn({defaultValue:"nomatch",showConfirmation:!0,confirmationMessage:wysijatrans.subscribers_import_match_confirmation_1+"\n"+wysijatrans.subscribers_import_match_confirmation_2,beforeResetColumn:function(t,e){"undefined"!=typeof jQuery.userStatusMapping&&"status"===t&&jQuery.userStatusMapping.changeFromUserStatus(e)},beforeChange:function(t,e){"undefined"!=typeof jQuery.userStatusMapping&&"status"===t&&jQuery.userStatusMapping.changeFromUserStatus(e)}}),"undefined"!=typeof wysijatrans.userStatuses&&jQuery(".match-dropdown select").userStatusMapping({defaultValue:"status",dataElement:".imported-field",statuses:wysijatrans.userStatuses})});