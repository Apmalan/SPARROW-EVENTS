$(document).ready(function(){
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    $('.telefone').mask('0000-0000');
    $('.telefone_ddd_fixo').mask('(00) 00000-0000');
    $('.celular').mask('(00) 00000-0000');
    $('.celular_ddd').mask('(00) 00000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.money2').mask("#.##0,00", {reverse: true});
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', {reverse: true});
    $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.fallback').mask("00r00r0000", {
        translation: {
          'r': {
            pattern: /[\/]/,
            fallback: '/'
          },
          placeholder: "__/__/____"
        }
      });
    $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
  });
  Callback examples
  var options =  {
    onComplete: function(cep) {
      alert('CEP Completed!:' + cep);
    },
    onKeyPress: function(cep, event, currentField, options){
      console.log('A key was pressed!:', cep, ' event: ', event,
                  'currentField: ', currentField, ' options: ', options);
    },
    onChange: function(cep){
      console.log('cep changed! ', cep);
    },
    onInvalid: function(val, e, f, invalid, options){
      var error = invalid[0];
      console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
    }
  };
  
  $('.cep_with_callback').mask('00000-000', options);
  On-the-fly mask change
  var options =  {
    onKeyPress: function(cep, e, field, options) {
      var masks = ['00000-000', '0-00-00-00'];
      var mask = (cep.length>7) ? masks[1] : masks[0];
      $('.crazy_cep').mask(mask, options);
  }};
  
  $('.crazy_cep').mask('00000-000', options);
  Mask as a function
  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
  };
  
  $('.sp_celphones').mask(SPMaskBehavior, spOptions);
  Using HTML notation examples
  To get your mask applied with the data-mask attribute just use it as the same way you use with the $.mask function.
  
  <input type="text" name="field-name" data-mask="00/00/0000" />
  Activating a reversible mask
  
  <input type="text" name="field-name" data-mask="00/00/0000" data-mask-reverse="true" />