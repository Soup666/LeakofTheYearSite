"use strict";
(self["webpackChunkLeakofTheYear"] = self["webpackChunkLeakofTheYear"] || []).push([["tapeForm"],{

/***/ "./assets/js/dashkit/choices.ts":
/*!**************************************!*\
  !*** ./assets/js/dashkit/choices.ts ***!
  \**************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");

__webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");

__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");

__webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");

__webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");

__webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptors.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptors.js");

__webpack_require__(/*! core-js/modules/es.object.define-properties.js */ "./node_modules/core-js/modules/es.object.define-properties.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.initChoices = void 0;

var Choices = __webpack_require__(/*! choices.js */ "./node_modules/choices.js/public/assets/scripts/choices.js");

var toggles = document.querySelectorAll('[data-choices]');

var decodeHtmlSpecialChars = function decodeHtmlSpecialChars(str) {
  str = str.replace(/&#(\d+);/g, function (match, dec) {
    return String.fromCharCode(dec);
  });
  str = str.replace(/&quot;/g, '"').replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&apos;/g, "'");
  return str;
}; // @ts-ignore


function initChoices(toggleElement) {
  var optionOverrides = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
  var defaultOptions = {
    allowHTML: false,
    classNames: {
      containerInner: toggleElement.className,
      input: 'form-control',
      inputCloned: 'form-control-sm',
      listDropdown: 'dropdown-menu',
      itemChoice: 'dropdown-item',
      activeState: 'show',
      selectedState: 'active'
    },
    shouldSort: false,
    callbackOnCreateTemplates: function callbackOnCreateTemplates(template) {
      var _this = this;

      return {
        choice: function choice(options, data) {
          var classNames = options.classNames;
          var classes = "".concat(classNames.item, " ").concat(classNames.itemChoice, " ").concat(data.disabled ? classNames.itemDisabled : classNames.itemSelectable);
          var disabled = data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable';
          var role = data.groupId > 0 ? 'role="treeitem"' : 'role="option"';
          var selectText = _this.config.itemSelectText;
          var label = '';

          if (data.customProperties && data.customProperties.avatarSrc) {
            label = "<div class=\"avatar avatar-xs me-3\">" + "    <img class=\"avatar-img rounded-circle\" src=\"".concat(data.customProperties.avatarSrc, "\" alt=\"").concat(data.label, "\" >") + "</div> ";
          }

          label += data.label;
          return template("<div class=\"".concat(classes, "\" data-select-text=\"").concat(selectText, "\" data-choice ").concat(disabled, " data-id=\"").concat(data.id, "\" data-value=\"").concat(data.value, "\" ").concat(role, ">").concat(label, "</div>"));
        }
      };
    }
  };

  if (toggleElement.multiple) {
    defaultOptions['removeItemButton'] = true;
  }

  var options = _objectSpread(_objectSpread({}, optionOverrides), defaultOptions); // @ts-ignore


  return toggleElement.choices = new Choices(toggleElement, options);
}

exports.initChoices = initChoices;
toggles.forEach(function (toggle) {
  // Decode from PHP's htmlspecialchars
  var dataChoices = toggle.getAttribute("data-choices");

  if (dataChoices) {
    dataChoices = decodeHtmlSpecialChars(dataChoices);
  }

  var elementOptions = dataChoices ? JSON.parse(dataChoices) : {};
  initChoices(toggle, elementOptions);
}); // Make available globally

window.Choices = Choices;

/***/ }),

/***/ "./assets/js/user/tapeForm.ts":
/*!************************************!*\
  !*** ./assets/js/user/tapeForm.ts ***!
  \************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");

__webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var choices_1 = __webpack_require__(/*! ../dashkit/choices */ "./assets/js/dashkit/choices.ts");

var tapeSelect = document.querySelector('#tape_db_file');
var artistSelect = document.querySelector('#tape_artist');
var nameInput = document.querySelector('#tape_name');
var extensionInput = document.querySelector('#tape_extension');
var tapeChoice = (0, choices_1.initChoices)(tapeSelect, {});
var artistChoice = (0, choices_1.initChoices)(artistSelect, {});
tapeSelect.addEventListener('change', function (event) {
  fetch('/api/v1/leak_file/get_file/' + tapeSelect.value).then(function (response) {
    return response.json();
  }).then(function (data) {
    console.log(data);
    console.log(extensionInput);
    nameInput.value = data.data.name;
    extensionInput.value = data.data.extension;
    artistChoice.setChoiceByValue(data.data.artist_id);
  });
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_choices_js_public_assets_scripts_choices_js-node_modules_core-js_modules-5128bb","vendors-node_modules_core-js_modules_es_function_name_js-node_modules_core-js_modules_es_promise_js"], () => (__webpack_exec__("./assets/js/user/tapeForm.ts")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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WUFBWixFQUEwQixFQUExQixDQUFuQjtBQUdBRixVQUFVLENBQUNPLGdCQUFYLENBQTRCLFFBQTVCLEVBQXNDLFVBQUNDLEtBQUQsRUFBVTtFQUM1Q0MsS0FBSyxDQUFDLGdDQUFnQ1QsVUFBVSxDQUFDYixLQUE1QyxDQUFMLENBQ0t1QixJQURMLENBQ1Usa0JBQVE7SUFBQSxPQUFJQyxRQUFRLENBQUNDLElBQVQsRUFBSjtFQUFBLENBRGxCLEVBRUtGLElBRkwsQ0FFVSxjQUFJLEVBQUc7SUFDVEcsT0FBTyxDQUFDQyxHQUFSLENBQVkxQyxJQUFaO0lBQ0F5QyxPQUFPLENBQUNDLEdBQVIsQ0FBWVYsY0FBWjtJQUNBRCxTQUFTLENBQUNoQixLQUFWLEdBQW1CZixJQUFJLENBQUNBLElBQUwsQ0FBVTJDLElBQTdCO0lBQ0FYLGNBQWMsQ0FBQ2pCLEtBQWYsR0FBd0JmLElBQUksQ0FBQ0EsSUFBTCxDQUFVNEMsU0FBbEM7SUFDQVYsWUFBWSxDQUFDVyxnQkFBYixDQUE4QjdDLElBQUksQ0FBQ0EsSUFBTCxDQUFVOEMsU0FBeEM7RUFDSCxDQVJMO0FBU0gsQ0FWRCIsInNvdXJjZXMiOlsid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9jaG9pY2VzLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvdXNlci90YXBlRm9ybS50cyJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgKiBhcyBDaG9pY2VzIGZyb20gXCJjaG9pY2VzLmpzXCI7XG5cbmNvbnN0IHRvZ2dsZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1jaG9pY2VzXScpO1xuXG5sZXQgZGVjb2RlSHRtbFNwZWNpYWxDaGFycyA9IChzdHIpID0+IHtcbiAgICBzdHIgPSBzdHIucmVwbGFjZSgvJiMoXFxkKyk7L2csIGZ1bmN0aW9uKG1hdGNoLCBkZWMpIHtcbiAgICAgICAgcmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUoZGVjKTtcbiAgICB9KTtcblxuICAgIHN0ciA9IHN0ci5yZXBsYWNlKC8mcXVvdDsvZywgJ1wiJylcbiAgICAgICAgLnJlcGxhY2UoLyZhbXA7L2csICcmJylcbiAgICAgICAgLnJlcGxhY2UoLyZsdDsvZywgJzwnKVxuICAgICAgICAucmVwbGFjZSgvJmd0Oy9nLCAnPicpXG4gICAgICAgIC5yZXBsYWNlKC8mYXBvczsvZywgXCInXCIpXG4gICAgO1xuXG4gICAgcmV0dXJuIHN0cjtcbn1cblxuLy8gQHRzLWlnbm9yZVxuZXhwb3J0IGZ1bmN0aW9uIGluaXRDaG9pY2VzKHRvZ2dsZUVsZW1lbnQsIG9wdGlvbk92ZXJyaWRlcyA9IHt9KTogQ2hvaWNlc1xue1xuICAgIGxldCBkZWZhdWx0T3B0aW9ucyA9IHtcbiAgICAgICAgYWxsb3dIVE1MOiBmYWxzZSxcbiAgICAgICAgY2xhc3NOYW1lczoge1xuICAgICAgICAgICAgY29udGFpbmVySW5uZXI6IHRvZ2dsZUVsZW1lbnQuY2xhc3NOYW1lLFxuICAgICAgICAgICAgaW5wdXQ6ICdmb3JtLWNvbnRyb2wnLFxuICAgICAgICAgICAgaW5wdXRDbG9uZWQ6ICdmb3JtLWNvbnRyb2wtc20nLFxuICAgICAgICAgICAgbGlzdERyb3Bkb3duOiAnZHJvcGRvd24tbWVudScsXG4gICAgICAgICAgICBpdGVtQ2hvaWNlOiAnZHJvcGRvd24taXRlbScsXG4gICAgICAgICAgICBhY3RpdmVTdGF0ZTogJ3Nob3cnLFxuICAgICAgICAgICAgc2VsZWN0ZWRTdGF0ZTogJ2FjdGl2ZScsXG4gICAgICAgIH0sXG4gICAgICAgIHNob3VsZFNvcnQ6IGZhbHNlLFxuICAgICAgICBjYWxsYmFja09uQ3JlYXRlVGVtcGxhdGVzOiBmdW5jdGlvbiAodGVtcGxhdGUpIHtcbiAgICAgICAgICAgIHJldHVybiB7XG4gICAgICAgICAgICAgICAgY2hvaWNlOiAob3B0aW9ucywgZGF0YSkgPT4ge1xuICAgICAgICAgICAgICAgICAgICBjb25zdCBjbGFzc05hbWVzID0gb3B0aW9ucy5jbGFzc05hbWVzO1xuXG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IGNsYXNzZXMgPSBgJHtjbGFzc05hbWVzLml0ZW19ICR7Y2xhc3NOYW1lcy5pdGVtQ2hvaWNlfSAke1xuICAgICAgICAgICAgICAgICAgICAgICAgZGF0YS5kaXNhYmxlZCA/IGNsYXNzTmFtZXMuaXRlbURpc2FibGVkIDogY2xhc3NOYW1lcy5pdGVtU2VsZWN0YWJsZVxuICAgICAgICAgICAgICAgICAgICB9YDtcblxuICAgICAgICAgICAgICAgICAgICBjb25zdCBkaXNhYmxlZCA9IGRhdGEuZGlzYWJsZWQgPyAnZGF0YS1jaG9pY2UtZGlzYWJsZWQgYXJpYS1kaXNhYmxlZD1cInRydWVcIicgOiAnZGF0YS1jaG9pY2Utc2VsZWN0YWJsZSc7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IHJvbGUgPSBkYXRhLmdyb3VwSWQgPiAwID8gJ3JvbGU9XCJ0cmVlaXRlbVwiJyA6ICdyb2xlPVwib3B0aW9uXCInO1xuICAgICAgICAgICAgICAgICAgICBjb25zdCBzZWxlY3RUZXh0ID0gdGhpcy5jb25maWcuaXRlbVNlbGVjdFRleHQ7XG5cbiAgICAgICAgICAgICAgICAgICAgbGV0IGxhYmVsID0gJyc7XG5cbiAgICAgICAgICAgICAgICAgICAgaWYgKGRhdGEuY3VzdG9tUHJvcGVydGllcyAmJiBkYXRhLmN1c3RvbVByb3BlcnRpZXMuYXZhdGFyU3JjKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBsYWJlbCA9IGA8ZGl2IGNsYXNzPVwiYXZhdGFyIGF2YXRhci14cyBtZS0zXCI+YFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICsgYCAgICA8aW1nIGNsYXNzPVwiYXZhdGFyLWltZyByb3VuZGVkLWNpcmNsZVwiIHNyYz1cIiR7ZGF0YS5jdXN0b21Qcm9wZXJ0aWVzLmF2YXRhclNyY31cIiBhbHQ9XCIke2RhdGEubGFiZWx9XCIgPmBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICArIGA8L2Rpdj4gYDtcbiAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgIGxhYmVsICs9IGRhdGEubGFiZWw7XG5cbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIHRlbXBsYXRlKGA8ZGl2IGNsYXNzPVwiJHtjbGFzc2VzfVwiIGRhdGEtc2VsZWN0LXRleHQ9XCIke3NlbGVjdFRleHR9XCIgZGF0YS1jaG9pY2UgJHtkaXNhYmxlZH0gZGF0YS1pZD1cIiR7ZGF0YS5pZH1cIiBkYXRhLXZhbHVlPVwiJHtkYXRhLnZhbHVlfVwiICR7cm9sZX0+JHtsYWJlbH08L2Rpdj5gKTtcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgfTtcbiAgICAgICAgfSxcbiAgICB9O1xuXG4gICAgaWYgKHRvZ2dsZUVsZW1lbnQubXVsdGlwbGUpIHtcbiAgICAgICAgZGVmYXVsdE9wdGlvbnNbJ3JlbW92ZUl0ZW1CdXR0b24nXSA9IHRydWU7XG4gICAgfVxuXG4gICAgY29uc3Qgb3B0aW9ucyA9IHtcbiAgICAgICAgLi4ub3B0aW9uT3ZlcnJpZGVzLFxuICAgICAgICAuLi5kZWZhdWx0T3B0aW9ucyxcbiAgICB9O1xuXG4gICAgLy8gQHRzLWlnbm9yZVxuICAgIHJldHVybiB0b2dnbGVFbGVtZW50LmNob2ljZXMgPSBuZXcgQ2hvaWNlcyh0b2dnbGVFbGVtZW50LCBvcHRpb25zKTtcbn1cblxudG9nZ2xlcy5mb3JFYWNoKCh0b2dnbGU6IEhUTUxTZWxlY3RFbGVtZW50fEhUTUxJbnB1dEVsZW1lbnQpID0+IHtcbiAgICAvLyBEZWNvZGUgZnJvbSBQSFAncyBodG1sc3BlY2lhbGNoYXJzXG4gICAgbGV0IGRhdGFDaG9pY2VzID0gdG9nZ2xlLmdldEF0dHJpYnV0ZShcImRhdGEtY2hvaWNlc1wiKTtcblxuICAgIGlmIChkYXRhQ2hvaWNlcykge1xuICAgICAgICBkYXRhQ2hvaWNlcyA9IGRlY29kZUh0bWxTcGVjaWFsQ2hhcnMoZGF0YUNob2ljZXMpO1xuICAgIH1cblxuICAgIGNvbnN0IGVsZW1lbnRPcHRpb25zID0gZGF0YUNob2ljZXMgPyBKU09OLnBhcnNlKGRhdGFDaG9pY2VzKSA6IHt9O1xuXG4gICAgaW5pdENob2ljZXModG9nZ2xlLCBlbGVtZW50T3B0aW9ucyk7XG59KTtcblxuLy8gTWFrZSBhdmFpbGFibGUgZ2xvYmFsbHlcbig8YW55PndpbmRvdykuQ2hvaWNlcyA9IENob2ljZXM7IiwiXG5pbXBvcnQge2luaXRDaG9pY2VzfSBmcm9tICcuLi9kYXNoa2l0L2Nob2ljZXMnO1xuaW1wb3J0IENob2ljZXMgZnJvbSBcImNob2ljZXMuanNcIjtcblxubGV0IHRhcGVTZWxlY3Q6IEhUTUxTZWxlY3RFbGVtZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3RhcGVfZGJfZmlsZScpO1xubGV0IGFydGlzdFNlbGVjdDogSFRNTFNlbGVjdEVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdGFwZV9hcnRpc3QnKTtcbmxldCBuYW1lSW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdGFwZV9uYW1lJyk7XG5sZXQgZXh0ZW5zaW9uSW5wdXQ6IEhUTUxJbnB1dEVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdGFwZV9leHRlbnNpb24nKTtcblxubGV0IHRhcGVDaG9pY2UgPSBpbml0Q2hvaWNlcyh0YXBlU2VsZWN0LCB7fSkgYXMgQ2hvaWNlcztcbmxldCBhcnRpc3RDaG9pY2UgPSBpbml0Q2hvaWNlcyhhcnRpc3RTZWxlY3QsIHt9KSBhcyBDaG9pY2VzO1xuXG5cbnRhcGVTZWxlY3QuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKGV2ZW50KSA9PiB7XG4gICAgZmV0Y2goJy9hcGkvdjEvbGVha19maWxlL2dldF9maWxlLycgKyB0YXBlU2VsZWN0LnZhbHVlKVxuICAgICAgICAudGhlbihyZXNwb25zZSA9PiByZXNwb25zZS5qc29uKCkpXG4gICAgICAgIC50aGVuKGRhdGEgPT4ge1xuICAgICAgICAgICAgY29uc29sZS5sb2coZGF0YSk7XG4gICAgICAgICAgICBjb25zb2xlLmxvZyhleHRlbnNpb25JbnB1dCk7XG4gICAgICAgICAgICBuYW1lSW5wdXQudmFsdWUgPSAoZGF0YS5kYXRhLm5hbWUpO1xuICAgICAgICAgICAgZXh0ZW5zaW9uSW5wdXQudmFsdWUgPSAoZGF0YS5kYXRhLmV4dGVuc2lvbik7XG4gICAgICAgICAgICBhcnRpc3RDaG9pY2Uuc2V0Q2hvaWNlQnlWYWx1ZShkYXRhLmRhdGEuYXJ0aXN0X2lkKTtcbiAgICAgICAgfSk7XG59KTtcbiJdLCJuYW1lcyI6WyJ0b2dnbGVzIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZGVjb2RlSHRtbFNwZWNpYWxDaGFycyIsInN0ciIsInJlcGxhY2UiLCJtYXRjaCIsImRlYyIsIlN0cmluZyIsImZyb21DaGFyQ29kZSIsImluaXRDaG9pY2VzIiwidG9nZ2xlRWxlbWVudCIsIm9wdGlvbk92ZXJyaWRlcyIsImRlZmF1bHRPcHRpb25zIiwiYWxsb3dIVE1MIiwiY2xhc3NOYW1lcyIsImNvbnRhaW5lcklubmVyIiwiY2xhc3NOYW1lIiwiaW5wdXQiLCJpbnB1dENsb25lZCIsImxpc3REcm9wZG93biIsIml0ZW1DaG9pY2UiLCJhY3RpdmVTdGF0ZSIsInNlbGVjdGVkU3RhdGUiLCJzaG91bGRTb3J0IiwiY2FsbGJhY2tPbkNyZWF0ZVRlbXBsYXRlcyIsInRlbXBsYXRlIiwiY2hvaWNlIiwib3B0aW9ucyIsImRhdGEiLCJjbGFzc2VzIiwiaXRlbSIsImRpc2FibGVkIiwiaXRlbURpc2FibGVkIiwiaXRlbVNlbGVjdGFibGUiLCJyb2xlIiwiZ3JvdXBJZCIsInNlbGVjdFRleHQiLCJjb25maWciLCJpdGVtU2VsZWN0VGV4dCIsImxhYmVsIiwiY3VzdG9tUHJvcGVydGllcyIsImF2YXRhclNyYyIsImlkIiwidmFsdWUiLCJtdWx0aXBsZSIsImNob2ljZXMiLCJDaG9pY2VzIiwiZXhwb3J0cyIsImZvckVhY2giLCJ0b2dnbGUiLCJkYXRhQ2hvaWNlcyIsImdldEF0dHJpYnV0ZSIsImVsZW1lbnRPcHRpb25zIiwiSlNPTiIsInBhcnNlIiwid2luZG93IiwidGFwZVNlbGVjdCIsInF1ZXJ5U2VsZWN0b3IiLCJhcnRpc3RTZWxlY3QiLCJuYW1lSW5wdXQiLCJleHRlbnNpb25JbnB1dCIsInRhcGVDaG9pY2UiLCJhcnRpc3RDaG9pY2UiLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJmZXRjaCIsInRoZW4iLCJyZXNwb25zZSIsImpzb24iLCJjb25zb2xlIiwibG9nIiwibmFtZSIsImV4dGVuc2lvbiIsInNldENob2ljZUJ5VmFsdWUiLCJhcnRpc3RfaWQiXSwic291cmNlUm9vdCI6IiJ9