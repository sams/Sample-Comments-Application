Support http://codaset.com/cakedc/comments

Copyright 2009 - 2010, Cake Development Corporation
                        1785 E. Sahara Avenue, Suite 490-423
                        Las Vegas, Nevada 89104
                        http://cakedc.com

The comments plugin will allow you to make any kind of data commentable.

## Installation

1. add migration and comments plugin as submodules

git submodule add git@codaset.com:cakedc/migrations.git plugins/migrations
git submodule add git@github.com:CakeDC/Comments.git plugins/comments
git submodule init
git submodule update

2. run migrations for posts, users and comments plugins

cake migration run all -plugin users
cake migration run all -plugin comments
cake migration run all -plugin posts

3. register user

http://TESTDOMAIN/users/register

4. login

http://TESTDOMAIN/users/login

5. visit posts page

http://TESTDOMAIN/posts

6. add some posts

http://TESTDOMAIN/posts/add

7. visit page to view some post and comment it.

http://TESTDOMAIN/posts/view/ID

