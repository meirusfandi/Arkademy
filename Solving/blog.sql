SELECT user.username, post.title, post.createBy, comments.comments
FROM (post LEFT JOIN user ON user.id = post.createdBy) 
RIGHT JOIN comments ON post.id = comments.postId;