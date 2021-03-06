<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Using OpenGL in SWT Applications</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <link rel="stylesheet" href="http://dev.eclipse.org/default_style.css" type="text/css">
    <link rel="stylesheet" href="http://www.eclipse.org/swt/swt.css" type="text/css">
    <link rel="shortcut icon" href="http://www.eclipse.org/images/eclipse.ico" type="image/x-icon">
</head>
<body bgcolor="#ffffff" text="#000000">
<table width="875px" class="swtpage">
<colgroup><col width="125px"><col width="750px"></colgroup>
<tr><?php include "../sidebar.php"; ?>
<td valign="top" style="padding: 10px"><h1 style="padding: 0; margin: 0; border-bottom: 1px solid #000000;">Using OpenGL in SWT Applications</h1>

<h3>Java OpenGL Bindings (SWT 3.2 and newer)</h3>

<p>Support for OpenGL is included in SWT as of Eclipse 3.2 in the package
<i>org.eclipse.swt.opengl</i>. See the <b>GLCanvas</b> class for
a widget which hosts an OpenGL context.</p>

<p>OpenGL applications use two separate APIs: the window-system
independent drawing API (OpenGL), and a window-system specific
integration layer (WGL under Windows, GLX under X, etc).  SWT
provides a thin layer above the window-system specific integration API,
enabling applications to use their Java OpenGL binding of choice.</p>

<ol>
<li>The <a href="http://www.lwjgl.org/">Lightweight Java Game Library
(LWJGL)</a> is a Java binding for OpenGL which supports OpenGL 2.0 and
many interesting extensions.  For an example using <i>LWJGL</i> with SWT, see
<a href="http://git.eclipse.org/c/platform/eclipse.platform.swt.git/tree/examples/org.eclipse.swt.snippets/src/org/eclipse/swt/snippetsSnippet195.java">Snippet 195</a>.
<p></p>
<li><a href="http://jogl.dev.java.net/">JOGL</a> is a Java binding for OpenGL.
For an example using <i>JOGL</i> with SWT, see
<a href="http://git.eclipse.org/c/platform/eclipse.platform.swt.git/tree/examples/org.eclipse.swt.snippets/src/org/eclipse/swt/snippetsSnippet209.java">Snippet 209</a>.
<p></p>
<li><a href="http://gljava.sourceforge.net/">gljava</a> is a Java binding
for OpenGL which aims to be simple and thin.  <i>gljava</i> is reported to work
well with SWT.
<p></p>
</ol>

<h3>The Experimental org.eclipse.opengl Binding (pre-SWT 3.2)</h3>

<p>Prior to Eclipse 3.2 there were experimental packages (available below) that facilitated the use of OpenGL in SWT.
To run the OpenGL view example, simply extract the zip and the
<i>org.eclipse.opengl</i> plugin to your Eclipse plugins folder. To run the standalone
example, download the examples zip along with the <i>org.eclipse.opengl</i> zip for
your platform and import them into your workspace.  There is also a stand-alone snippet that uses this package
(<a href="http://git.eclipse.org/c/platform/eclipse.platform.swt.git/tree/examples/org.eclipse.swt.snippets/src/org/eclipse/swt/snippetsSnippet174.java">Snippet 174</a>).
</p>

<p><b>If you are using SWT 3.2 or newer then you should use the supported OpenGL binding that is
included in the SWT package instead of these experimental downloads which are not supported.</b></p>

<table width="100%">
<tr><th bgcolor="#0080c0" align="left" style="padding: 2px;"><font color="#ffffff">&nbsp; Deprecated OpenGL Binding for SWT (Experimental)</font>
</table>

<table width="100%" cellpadding="3px">
<tr><td valign="top"><span style="white-space: nowrap;">28 Sep 2005</span>
    <td valign="top">Windows
    <td valign="top"><a href="eclipse-opengl-0.5.0-win32.zip">eclipse-opengl-0.5.0-win32.zip</a>
<tr><td valign="top"><span style="white-space: nowrap;">28 Sep 2005</span>
    <td valign="top">Linux x86
    <td valign="top"><a href="eclipse-opengl-0.5.0-linux-x86.zip">eclipse-opengl-0.5.0-linux-x86.zip</a>
<tr><td valign="top"><span style="white-space: nowrap;">28 Sep 2005</span>
    <td valign="top">MacOS X
    <td valign="top"><a href="eclipse-opengl-0.5.0-macosx.zip">eclipse-opengl-0.5.0-macosx.zip</a>
<tr><td valign="top"><span style="white-space: nowrap;">28 Sep 2005</span>
    <td valign="top">Example applications
    <td valign="top"><a href="org.eclipse.swt.opengl.examples_0.5.0.zip">org.eclipse.swt.opengl.examples_0.5.0.zip</a>
<tr><td valign="top"><span style="white-space: nowrap;">28 Sep 2005</span>
    <td valign="top">Example plugin with a view that uses OpenGL
    <td valign="top"><a href="org.eclipse.swt.examples.openglview_0.5.0.zip">org.eclipse.swt.examples.openglview_0.5.0.zip</a>
<tr><td>&nbsp;<td><td>
<tr><th colspan="3" bgcolor="#0080c0" align="left" style="padding: 2px;"><font color="#ffffff">&nbsp; Deprecated OpenGL Binding for SWT 3.1</font>
<tr><td valign="top"><span style="white-space: nowrap;">10 Nov 2004</span>
    <td valign="top">Experimental OpenGL plugins for SWT 3.1
    <td valign="top"><a href="opengl.html">old implementation</a>
</table>

</table>
</body>
</html>
