/ *!
 * IE10 truco ventana para Superficie / escritorio de Windows 8 bug
 * Derecho de Autor 2014 Twitter, Inc.
 * Licenciado bajo la Unported Licencia Creative Commons Attribution 3.0. Para
 * Más información, consulte http://creativecommons.org/licenses/by/3.0/.
 * /

// Consulte la Guía de docs Iniciado para más información:
// Http://getbootstrap.com/getting-started/#support-IE10-ancho

(Function () {
  "Use strict ';
  if (navigator.userAgent.match (/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement ("estilo")
    msViewportStyle.appendChild (
      document.createTextNode (
        '@ -ms-Viewport {width: auto importante!}'
      )
    )
    document.querySelector ("cabeza"). appendChild (msViewportStyle)
  }
}) ();