HTMLToImage
===========

A PHP script that dynamically converts an HTML file into an image (png) and displays it on a page. 
This is useful if you need to display pages, for example, from an eBook(.epub) or just plain old HTML files, securely. Content from a normal page can be fetched easily, whereas once it is converted into an image dynamically, getting the content from it would require it being run through an OCR script. 

Drawbacks- 1) No formatting/styling done in the HTML file will be reflected in the image. Keep in mind, this script does
            NOT render HTML, it is merely a tool for extracting its content. This is done by stripping the HTML of all its
            tags and running a few algorithms for dynamic resizing of image, text wrapping, etc. 
           2). The lines of text in the image don't look to pretty- irregular spacing, text overlapping on increasing                  font-size. These are issues that can be fixed by getting a deeper understanding of how the functions used work.
           3). The amount of text fit into the image is proportional to the browser window's size. Yet to figure out an                efficient system to save the cut-off text and add a navigation button to display that too
