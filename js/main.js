var randomIndexes = new Array();

function shuffle(array) {

  var currentIndex = array.length
    , temporaryValue
    , randomIndex
    ;

  var i = 0;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;

    randomIndexes[i] = randomIndex;

    i++;

  }

  return array;
}


var $AviationIpsum = new function() {

  "use strict";

  var $this = this;

  /**
   * [init description]
   * @return {[type]} [description]
   */
  $this.init = function() {

    $this.nrOfQuotes = theQuotes.quotes.length;

    $('#nr-of-quotes').text($this.nrOfQuotes)

    $this.$nrOfParagraphsSelectElm = $('#nr-of-paragraphs-select');
    $this.$ipsumElm = $('#ipsum');
    $this.$wrapInPElm = $('#wrap-in-p');
    $this.$includeSrcElm = $('#include-source');
    $this.$showSourcesElm = $('#show-sources');

    $this.nrOfParagraphsBuilt = 0;

    $this.$ipsumElm.autosize();

    $this.bindEvents();

    $this.buildIpsum(3);

  };

  /**
   * [bindEvents description]
   * @return {[type]} [description]
   */
  $this.bindEvents = function() {

    $('#build-form').on('submit', function(event) {

      event.preventDefault();

      $this.buildIpsum($this.$nrOfParagraphsSelectElm.val());

    });

    $this.$showSourcesElm.on('click', function(event) {

      event.preventDefault();

      var show = $this.$showSourcesElm.attr('data-show');

      $this.rebuildWithQuotes(show == 1);

      var newShow = (show == '1' ? '0' : '1');

      $this.$showSourcesElm.attr('data-show', newShow);

    });

    /*
    $this.$includeSrcElm.on('click', function(event) {

      if($(this).is(':checked')) {
        $this.$showSourcesElm.css('visibility', 'hidden');
      } else {
        $this.$showSourcesElm.css('visibility', 'visible');
      }

    });
    */

  };

  /**
   * [buildIpsum description]
   * @return {[type]} [description]
   */
  $this.buildIpsum = function(nrOfParagraphs) {

    var shuffledQuotes = shuffle(theQuotes.quotes);
    var selectedQuotes = shuffledQuotes.slice(0, nrOfParagraphs);
    var quotesHtml = '';

    var includeSrc = $this.$includeSrcElm.is(':checked');

    var wrappers = $this.getWrappers();

    if(includeSrc) {
      $this.$showSourcesElm.css('visibility', 'hidden');
    } else {
      $this.$showSourcesElm.css('visibility', 'visible');
    };

    for(var i = 0; i < nrOfParagraphs; i++) {

      quotesHtml += wrappers.before + selectedQuotes[i].txt;

      if(includeSrc) {
        quotesHtml += wrappers.beforeQuote + '// ' + selectedQuotes[i].src;
      }

      quotesHtml += wrappers.after;

    }

    $this.nrOfParagraphsBuilt = nrOfParagraphs;

    $this.$ipsumElm.text(quotesHtml).trigger('autosize.resize');

  };

  /**
   * [getWrappers description]
   * @return {[type]} [description]
   */
  $this.getWrappers = function() {

    var wrappers = {
      before: '',
      after: '\r\n\r\n',
      beforeQuote: '\r\n'
    }

    if($this.$wrapInPElm.is(':checked')) {
      wrappers.before = '<p>';
      wrappers.after = '</p>\r\n\r\n';
      wrappers.beforeQuote = '\r\n\<br/>';
    }

    return wrappers;

  };

  /**
   * [rebuildWithQuotes description]
   * @return {[type]} [description]
   */
  $this.rebuildWithQuotes = function(withQuotes) {

    var wrappers = $this.getWrappers();
    var quotesHtml = '';

    for(var i = 0; i < $this.nrOfParagraphsBuilt; i++) {

      quotesHtml += wrappers.before + theQuotes.quotes[i].txt;

      if(withQuotes) {
       quotesHtml += wrappers.beforeQuote + '// ' + theQuotes.quotes[i].src;
      }
      quotesHtml += wrappers.after;

    }

    $this.$ipsumElm.text(quotesHtml).trigger('autosize.resize');

  };

};


$(function() {
  
  window.$AviationIpsum.init();

});