import EditorJS from '@editorjs/editorjs';
const Header       = require('@editorjs/header');
const LinkTool     = require('@editorjs/link');
const RawTool      = require('@editorjs/raw');
const SimpleImage  = require('@editorjs/simple-image');
const ImageTool    = require('@editorjs/image');
const List         = require('@editorjs/list');
const Checklist    = require('@editorjs/checklist');
const Embed        = require('@editorjs/embed');
const Quote        = require('@editorjs/quote');
const Table        = require('@editorjs/table');
const Delimiter    = require('@editorjs/delimiter');
const Marker       = require('@editorjs/marker');
const AttachesTool = require('@editorjs/attaches/dist/bundle');



$(document).ready(function () {

	if ($("#listado_lecciones .col-12.my-2")[0]) {
		var ContenidoEditor=JSON.parse($("#listado_lecciones .col-12.my-2").attr("data-contenido"));
	} else{
		var ContenidoEditor={"time":1564167510778,"blocks":[{"type":"header","data":{"text":"¡Bienvenido al gestor de contenidos para tus lecciones!","level":2}},{"type":"paragraph","data":{"text":"El editor trabaja bajo la metodologia de bloques de contenido, lo que hace que sea de uso facil y sencillo. Cada bloque puede crearse al presionar la tecla '<b>enter</b>' en tu teclado; al hacerlo, aparecera un icono '<b>+</b>' que puedes clickear para elegir el tipo de contenido que usaras (Texto, imagenes, video, audios, links, documentos, etc). <mark class=\"cdx-marker\">Puedes gestionar la posicion de cada bloque haciendo click sobre él y presionando el icono de opciones en la parte derecha del bloque</mark>; alli tambien podras eliminarlo y acceder otras opciones dependiendo del tipo de bloque."}},{"type":"header","data":{"text":"Listas","level":3}},{"type":"list","data":{"style":"unordered","items":["Este es un ejemplo de un bloque de lista","Puedes añadir cuantos puntos quieres presionando '<b>enter</b>'","Tambien puedes cambiar los puntos por numeros en la configuracion"]}},{"type":"header","data":{"text":"¿Qué significa «editor de estilo bloque»?","level":3}},{"type":"paragraph","data":{"text":"El espacio de trabajo en los editores clásicos está hecho de un único elemento editable con contenido, que se utiliza para crear diferentes marcas de HTML. El espacio de trabajo de Editor.js <mark class=\"cdx-marker\">consiste en bloques separados: párrafos, encabezados, imágenes, listas, citas, etc.</mark> Cada uno de ellos es un elemento independiente de contenido (o estructura más compleja) proporcionado por Plugin y unido por Editor's Core."}},{"type":"paragraph","data":{"text":"Hay docenas de Bloques listos para usar. Por ejemplo, puedes implementar Bloques para Tweets, publicaciones de Instagram, encuestas y sondeos, botones de CTA e incluso juegos."}},{"type":"header","data":{"text":"LOREM IPSUM","level":3}},{"type":"paragraph","data":{"text":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat consequat feugiat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam ac vestibulum lorem.&nbsp;"}},{"type":"paragraph","data":{"text":"Nunc scelerisque porta magna eget interdum. Vivamus ullamcorper turpis mi, vel consectetur elit eleifend in. ."}},{"type":"paragraph","data":{"text":"Nunc varius nisi eu ex hendrerit varius. Duis pellentesque ante sit amet sapien&nbsp;"}},{"type":"delimiter","data":{}},{"type":"paragraph","data":{"text":"Elementum, sit amet posuere ipsum lacinia. Cras accumsan elementum pellentesque. In hac habitasse platea dictumst. Suspendisse erat lorem, convallis in tempor nec, ornare vitae lorem 😏"}}],"version":"2.15.0"}
	}
	
	window.headers = {
	  'authorization': 'Bearer eyJhbGciJ9...TJVA95OrM7h7HgQ',
	}

	window.ToolsEditorJS={
			    header: Header,
			    embed: Embed,
			    // image: SimpleImage,
			    raw: RawTool,
			    delimiter: Delimiter,
			    Marker: {
			      class: Marker,
			      shortcut: 'CMD+SHIFT+M',
			    },
			    attaches: {
			      class: AttachesTool,
			      config: {
			        endpoint: 'http://localhost/Temporal/Workana/EduOnline/public/editor-js/upload-file'
			      }
			    },
			    table: {
			      class: Table,
			    },
			    linkTool: {
			      class: LinkTool,
			      config: {
			        endpoint: 'http://localhost/Temporal/Workana/EduOnline/public/editor-js/embebed-link', // Your backend endpoint for url data fetching
			      }
			    },
			    image: {
			      class: ImageTool,
			      additionalRequestHeaders:{
			      	"epale": "Holaa",
			      },
			      config: {
			        endpoints: {
			          byFile: 'http://localhost/Temporal/Workana/EduOnline/public/editor-js/upload-img', // Your backend file uploader endpoint
			          byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
			        }
			      }
			    },
			    list: {
			      class: List,
			      inlineToolbar: true,
			    },
			    checklist: {
			      class: Checklist,
			      inlineToolbar: true,
			    },
			  };


				window.editor = new EditorJS({
				  autofocus: true,
				   tools: ToolsEditorJS,
					  data: ContenidoEditor,
							autofocus: true,
							placeholder: '¡Aca puedes insertar el contenido que deseas para la clase!',
							// onChange: () => {window.SalvarDatosEditor()},

				});
});



window.SalvarDatosEditor=function(id){
	window.editor.save().then((outputData) => {

	  console.log(outputData)
	  window.ContenidoDeClases[window.LeccionSeleccionada]=outputData;

	  window.updateConteindoLeccion(window.LeccionSeleccionada, window.ContenidoDeClases);

	  window.LeccionSeleccionada=id;
	  window.editor.render(window.ContenidoDeClases[id]);


	}).catch((error) => {
	  console.log('Saving failed: ', error)
	});
}