Support http://github.com/CakeDC/Sample-Comments-Application/issues

Copyright 2009 - 2010, Cake Development Corporation
                        1785 E. Sahara Avenue, Suite 490-423
                        Las Vegas, Nevada 89104
                        http://cakedc.com

The comments plugin will allow you to make any kind of data comment-able.

## Installation

1. add migration and comments plugin as submodules

	git submodule init
	git submodule update

2. run migrations for posts, users and comments plugins

	cake Migrations.migration all --plugin Users
	cake Migrations.migration all --plugin Comments
	cake Migrations.migration all --plugin Posts


## Testing
	
1. register user

	http://TESTDOMAIN/users/register

2. login

	http://TESTDOMAIN/users/login

3. visit posts page

	http://TESTDOMAIN/posts

4. add some posts

	http://TESTDOMAIN/posts/add

5. visit page to view some post and try to comment it, reply to added comments, etc.

	http://TESTDOMAIN/posts/view/ID
	
6. Also you may want to look at comments admin interface
	http://TESTDOMAIN/admin/comments/index

