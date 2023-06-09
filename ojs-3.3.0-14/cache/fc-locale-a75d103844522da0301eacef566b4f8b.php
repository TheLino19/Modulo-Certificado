<?php return array (
  'plugins.pubIds.doi.displayName' => 'DOI',
  'plugins.pubIds.doi.description' => 'Este módulo permite la asignación del Identificador de Objeto Digital (Digital Object Identifier, DOI) a publicaciones, artículos y galeradas en OJS.',
  'plugins.pubIds.doi.readerDisplayName' => 'DOI',
  'plugins.pubIds.doi.manager.settings.description' => 'Configure el módulo de DOI para poder administrar y usar DOIs en OJS:',
  'plugins.pubIds.doi.manager.settings.doiObjects' => 'Contenido de la revista',
  'plugins.pubIds.doi.manager.settings.doiObjectsRequired' => 'Elija los objetos a los cuales los DOIs deben estar asignados.',
  'plugins.pubIds.doi.manager.settings.explainDois' => 'Seleccione los objetos de publicación que tendrán Identificadores de Objetos Digitales (Digital Object Identifier, DOI) asignados:',
  'plugins.pubIds.doi.manager.settings.enableIssueDoi' => 'Números',
  'plugins.pubIds.doi.manager.settings.enablePublicationDoi' => 'Artículos',
  'plugins.pubIds.doi.manager.settings.enableRepresentationDoi' => 'Galeradas',
  'plugins.pubIds.doi.manager.settings.doiPrefix' => 'Prefijo DOI',
  'plugins.pubIds.doi.manager.settings.doiPrefix.description' => 'El prefijo DOI lo asignan las agencias registradoras (p. ej., <a href="http://www.crossref.org" target="_new">Crossref</a>) y sigue el formato 10.xxxx (p. ej., 10.1234):',
  'plugins.pubIds.doi.manager.settings.doiPrefixPattern' => 'El prefijo DOI es obligatorio y sigue el formato 10.xxxx.',
  'plugins.pubIds.doi.manager.settings.doiSuffix' => 'Sufijo DOI',
  'plugins.pubIds.doi.manager.settings.doiSuffix.description' => 'El sufijo DOI puede tomar cualquier forma, pero debe ser único entre todos los objetos de publicación con el mismo prefijo DOI asignado:',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern' => 'Usa el patrón introducido abajo para generar sufijos DOI. Usa %j para iniciales de revista, %v para el número del volumen, %i para el número de la publicación, %Y para el año, %a para el ID del artículo de OJS, %g para la galerada de OJS, %f para el ID del archivo de OJS, %p para el número de página y %x para "identificador personalizado".',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.example' => 'Por ejemplo, vol%viss%ipp%p crearia un DOI del tipo 10.1234/vol3iss2pp230',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.issues' => 'para números',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.submissions' => 'para artículos',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.representations' => 'para galeradas',
  'plugins.pubIds.doi.manager.settings.doiSuffixDefault' => 'Usar patrones por defecto.',
  'plugins.pubIds.doi.manager.settings.doiSuffixDefault.description' => '%j.v%vi%i para números<br />%j.v%vi%i.%a para artículos<br />%j.v%vi%i.%a.g%g para galeradas.',
  'plugins.pubIds.doi.manager.settings.doiSuffixCustomIdentifier' => 'Introduzca un sufijo DOI individual para cada elemento publicado. Encontrará un campo DOI adicional en la página de metadatos de cada elemento.',
  'plugins.pubIds.doi.manager.settings.doiIssueSuffixPatternRequired' => 'Introduzca el patrón del sufijo DOI para números.',
  'plugins.pubIds.doi.manager.settings.doiSubmissionSuffixPatternRequired' => 'Introduzca el patrón del sufijo DOI para artículos.',
  'plugins.pubIds.doi.manager.settings.doiRepresentationSuffixPatternRequired' => 'Introduzca el patrón del sufijo DOI para galeradas.',
  'plugins.pubIds.doi.manager.settings.doiReassign' => 'Reasignar DOIs',
  'plugins.pubIds.doi.manager.settings.doiReassign.description' => 'Si cambia su configuración, los DOIs que ya han sido asignados no se verán afectados. Si lo desea, cuando guarde la configuración del DOI, use este botón para borrar todos los DOIs existentes y que los nuevos ajustes también tengan efecto sobre los identificadores ya asignados.',
  'plugins.pubIds.doi.manager.settings.doiReassign.confirm' => '¿Seguro que quiere eliminar todos los DOI existentes?',
  'plugins.pubIds.doi.manager.settings.doiAssignJournalWide' => 'Asignar DOI',
  'plugins.pubIds.doi.manager.settings.doiAssignJournalWide.description' => 'Asignar DOI a los objetos publicados de la revista que no dispongan ya de uno. Esta acción no puede ser usada con la configuración de sufijo individual. Si ha modificado la configuración del DOI (más arriba), por favor, guarde los cambios antes de realizar esta acción. La asignación de DOI puede llevar mucho tiempo, dependiendo del número de objetos publicados en la revista.',
  'plugins.pubIds.doi.manager.settings.doiAssignJournalWide.confirm' => '¿Seguro que quiere asignar DOI a todos los objetos publicados que no dispongan ya de uno?',
  'plugins.pubIds.doi.editor.doi' => 'DOI',
  'plugins.pubIds.doi.editor.doi.description' => 'El DOI debe empezar con {$prefix}.',
  'plugins.pubIds.doi.editor.doi.assignDoi' => 'Asignar',
  'plugins.pubIds.doi.editor.doiObjectTypeIssue' => 'número',
  'plugins.pubIds.doi.editor.doiObjectTypeSubmission' => 'artículo',
  'plugins.pubIds.doi.editor.doiObjectTypeRepresentation' => 'galerada',
  'plugins.pubIds.doi.editor.customSuffixMissing' => 'El DOI no puede ser asignado porque falta el sufijo personalizado.',
  'plugins.pubIds.doi.editor.missingIssue' => 'No puede generar un DOI hasta que esta publicación sea asignada a un número.',
  'plugins.pubIds.doi.editor.missingParts' => 'No puede generar un DOI porque una o más partes del patrón DOI no se encuentran. Sería necesario asignar la publicación a un número, establecer un identificador editorial o añadir los números de página.',
  'plugins.pubIds.doi.editor.patternNotResolved' => 'El DOI no puede ser asignado porque contiene un patrón irresoluble.',
  'plugins.pubIds.doi.editor.canBeAssigned' => 'Esto es una previsualización del DOI. Seleccione la casilla de verificación y guarde el formulario para asignar el DOI.',
  'plugins.pubIds.doi.editor.assigned' => 'Se ha asignado un DOI a este {$pubObjectType}.',
  'plugins.pubIds.doi.editor.doiSuffixCustomIdentifierNotUnique' => 'El sufijo DOI proporcionado ya está en uso por otro objeto publicado. Introduzca un sufijo DOI único para cada objeto.',
  'plugins.pubIds.doi.editor.clearObjectsDoi' => 'Limpiar',
  'plugins.pubIds.doi.editor.clearObjectsDoi.confirm' => '¿Seguro que quiere eliminar el DOI existente?',
  'plugins.pubIds.doi.editor.clearIssueObjectsDoi' => 'Limpiar los DOI de los objetos de publicación',
  'plugins.pubIds.doi.editor.clearIssueObjectsDoi.confirm' => '¿Seguro que quiere eliminar los DOI existentes de los objetos del número?',
  'plugins.pubIds.doi.editor.clearIssueObjectsDoi.description' => 'Use la siguiente opción para borrar los DOIs de todos los objetos (artículos y galeradas) actualmente planificados para esta publicación.',
  'plugins.pubIds.doi.editor.assignDoi' => 'Asignar el DOI {$pubId} a este {$pubObjectType}',
  'plugins.pubIds.doi.editor.assignDoi.emptySuffix' => 'El DOI no puede ser asignado porque falta el sufijo personalizado.',
  'plugins.pubIds.doi.editor.assignDoi.pattern' => 'El DOI {$pubId} no puede ser asignado porque contiene un patrón irresoluble.',
  'plugins.pubIds.doi.editor.assignDoi.assigned' => 'El DOI {$pubId} ha sido asignado.',
  'plugins.pubIds.doi.editor.missingPrefix' => 'El DOI debe empezar con {$doiPrefix}.',
  'plugins.pubIds.doi.editor.preview.publication' => 'El DOI de esta publicación será {$doi}.',
  'plugins.pubIds.doi.editor.preview.publication.none' => 'No se ha asignado ningún DOI a esta publicación.',
  'plugins.pubIds.doi.editor.preview.galleys' => 'Galerada: {$galleyLabel}',
  'plugins.pubIds.doi.editor.preview.objects' => 'Elemento',
  'plugins.pubIds.doi.manager.settings.enableSubmissionDoi' => 'Artículos',
);